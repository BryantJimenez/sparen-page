<?php

namespace App\Http\Controllers;

use App\Consultancy;
use App\User;
use App\Binnacle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultancyUpdateRequest;
use Illuminate\Support\Facades\App;

class ConsultancyController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function edit($lang)
    {
        $consultancy = Consultancy::where('id', 1)->firstOrFail();
        return view('web.consultancy.edit', compact('lang', 'consultancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function update(ConsultancyUpdateRequest $request, $lang) {

        $consultancy = Consultancy::where('id', 1)->firstOrFail();
        $data=array('title1_spanish' => request('title1_spanish'), 'title2_spanish' => request('title2_spanish'), 'title3_spanish' => request('title3_spanish'), 'title1_english' => request('title1_english'), 'title2_english' => request('title2_english'), 'title3_english' => request('title3_english'), 'content1_spanish' => request('content1_spanish'), 'content2_spanish' => request('content2_spanish'), 'content3_spanish' => request('content3_spanish'), 'content1_english' => request('content1_english'), 'content2_english' => request('content2_english'), 'content3_english' => request('content3_english'));

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $picture = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/consultancy/', $picture);
            $data['picture'] = $picture;
        }

        $consultancy->fill($data)->save();

         //Bitácora

        $activity = 'Ha editado la sección "Consultorías"';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($consultancy && $binnacle) {
            return redirect()->route('consultoria.edit', ['lang' => $lang])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Consultorías" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('consultoria.edit', ['lang' => $lang])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
