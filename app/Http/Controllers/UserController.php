<?php

namespace App\Http\Controllers;

use App\User;
use App\Binnacle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num = 1;
        $users = User::all();
        return view('web.users.index', compact('num', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

        //Registro de Usuarios

        $count=User::where('name', request('name'))->where('lastname', request('lastname'))->count();
        $slug=Str::slug(request('name')." ".request('lastname'), '-');
        if ($count>0) {
            $slug=$slug."-".$count;
        }

        // Validación para que no se repita el slug
        $num=0;
        while (true) {
            $count2 = User::where('slug', $slug)->count();
            if ($count2>0) {
                $slug=$slug."-".$num;
                $num++;
            } else {
                $data=array('name' => request('name'), 'lastname' => request('lastname'), 'phone' => request('phone'), 'slug' => $slug, 'email' => request('email'), 'password' => Hash::make(request('password')), 'dni' => request('dni'), 'address' => request('address'));
                break;
            }
        }

        // Mover imagen a carpeta users y extraer nombre
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $photo = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/users/', $photo);
            $data['photo'] = $photo;
        }
        $user=User::create($data);

        //Fin Registro de Usuarios


        //Bitácora

        $activity = 'Ha registrado a un usuario';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($user && $binnacle) {
            return redirect()->route('usuario.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El usuario ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('usuario.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(user $web)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit($slug) {

        $user=User::where('slug', $slug)->firstOrFail();
        return view('web.users.edit', compact("user"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request,$slug) {

        $user = User::where('slug', $slug)->firstOrFail();
        $user->fill($request->all())->save();

                //Bitácora

        $activity = 'Ha editado a un usuario';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora

        if ($user && $binnacle) {
            return redirect()->route('usuario.index', ['slug' => $slug])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'El usuario ha sido editado exitosamente.']);
        } else {
            return redirect()->route('usuario.index', ['slug' => $slug])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
    }


}