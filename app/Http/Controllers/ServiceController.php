<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;
use App\Binnacle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceUpdateSpanishRequest;
use App\Http\Requests\ServiceUpdateEnglishRequest;


class ServiceController extends Controller
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
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $service = Service::where('id', 1)->firstOrFail();
        return view('web.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateSpanishRequest $request,  $id) {

        $service = Service::where('id', $id)->firstOrFail();

        if ($request->hasFile('picture1')) {
            $file = $request->file('picture1');
            $picture1 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/service/', $picture1);
            $data['picture1'] = $picture1;
        }

         if ($request->hasFile('picture2')) {
            $file = $request->file('picture2');
            $picture2 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/service/', $picture2);
            $data['picture2'] = $picture2;
        }

         if ($request->hasFile('picture3')) {
            $file = $request->file('picture3');
            $picture3 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/service/', $picture3);
            $data['picture3'] = $picture3;
        }

        $service->fill($request->all())->save();

         //Bitácora

        $activity = 'Ha editado la sección "Servicios" en Español';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($service && $binnacle) {
            return redirect()->route('home')->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Banner" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('home')->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

        public function updateEnglish(ServiceUpdateEnglishRequest $request,  $id) {

        $service = Service::where('id', $id)->firstOrFail();

        if ($request->hasFile('picture1')) {
            $file = $request->file('picture1');
            $picture1 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/service/', $picture1);
            $data['picture1'] = $picture1;
        }

         if ($request->hasFile('picture2')) {
            $file = $request->file('picture2');
            $picture2 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/service/', $picture2);
            $data['picture2'] = $picture2;
        }

         if ($request->hasFile('picture3')) {
            $file = $request->file('picture3');
            $picture3 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/service/', $picture3);
            $data['picture3'] = $picture3;
        }

        $service->fill($request->all())->save();

         //Bitácora

        $activity = 'Ha editado la sección "Servicios" en Inglés';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($service && $binnacle) {
            return redirect()->route('home')->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Banner" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('home')->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
