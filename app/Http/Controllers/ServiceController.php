<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;
use App\Binnacle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceUpdateRequest;
use Illuminate\Support\Facades\App;

class ServiceController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($lang)
    {
        App::setlocale($lang);
        $service = Service::where('id', 1)->firstOrFail();
        return view('web.service.edit', compact('lang', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, $lang) {

        $service = Service::where('id', 1)->firstOrFail();
        $data=array('title1_spanish' => request('title1_spanish'), 'title2_spanish' => request('title2_spanish'), 'title3_spanish' => request('title3_spanish'), 'title1_english' => request('title1_english'), 'title2_english' => request('title2_english'), 'title3_english' => request('title3_english'), 'content1_spanish' => request('content1_spanish'), 'content2_spanish' => request('content2_spanish'), 'content3_spanish' => request('content3_spanish'), 'content1_english' => request('content1_english'), 'content2_english' => request('content2_english'), 'content3_english' => request('content3_english'));

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

        $service->fill($data)->save();

        //Bitácora
        $activity = 'Ha editado la sección "Servicios" en Español';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($service && $binnacle) {
            return redirect()->route('servicio.edit', ['lang' => $lang])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Servicios" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('servicio.edit', ['lang' => $lang])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
