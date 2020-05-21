<?php

namespace App\Http\Controllers;

use App\Consultancy;
use App\User;
use App\Binnacle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultancyUpdateSpanishRequest;
use App\Http\Requests\ConsultancyUpdateEnglishRequest;

class ConsultancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function show(Consultancy $consultancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultancy $consultancy)
    {
        $consultancy = Consultancy::where('id', 1)->firstOrFail();
        return view('web.consultancy.edit', compact('consultancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function update(ConsultancyUpdateSpanishRequest $request, $id) {

        $consultancy = Consultancy::where('id', $id)->firstOrFail();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $picture = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/consultancy/', $picture);
            $data['picture'] = $picture;
        }

        $consultancy->fill($request->all())->save();

         //Bitácora

        $activity = 'Ha editado la sección "Consultorías" en Español';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($consultancy && $binnacle) {
            return redirect()->route('home.sobre')->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Consultorías" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('home.sobre')->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function updateEnglish(ConsultancyUpdateSEnglishRequest $request, $id) {

        $consultancy = Consultancy::where('id', $id)->firstOrFail();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $picture = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/consultancy/', $picture);
            $data['picture'] = $picture;
        }

        $consultancy->fill($request->all())->save();

         //Bitácora

        $activity = 'Ha editado la sección "Consultorías" en Inglés';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($consultancy && $binnacle) {
            return redirect()->route('home.sobre')->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Consultorías" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('home.sobre')->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultancy $consultancy)
    {
        //
    }
}
