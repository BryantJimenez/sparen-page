<?php

namespace App\Http\Controllers;

use App\User;
use App\Binnacle;
use App\InfoContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\InfoContactUpdateRequest;

class InfoContactController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InfoContact  $infoContact
     * @return \Illuminate\Http\Response
     */
    public function edit($lang)
    {
        App::setlocale($lang);
        $info = InfoContact::where('id', 1)->firstOrFail();
        return view('web.contact.edit', compact('lang', 'info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoContact  $infoContact
     * @return \Illuminate\Http\Response
     */
    public function update(InfoContactUpdateRequest $request, $lang) {

        $info = InfoContact::where('id', 1)->firstOrFail();
        $data=array('address' => request('address'), 'phone' => request('phone'), 'email' => request('email'), 'facebook' => request('facebook'), 'twitter' => request('twitter'));
        $info->fill($data)->save();

         //Bitácora

        $activity = 'Ha editado la sección "Contacto"';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($info && $binnacle) {
            return redirect()->route('contacto.create', ['lang' => $lang])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Contacto" ha sido createada exitosamente.']);
        } else {
            return redirect()->route('contacto.edit', ['lang' => $lang])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
