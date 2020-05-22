<?php

namespace App\Http\Controllers;

use App\About;
use App\User;
use App\Binnacle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AboutUpdateRequest;
use Illuminate\Support\Facades\App;

class AboutController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($lang)
    {
        App::setlocale($lang);
        $about = About::where('id', 1)->firstOrFail();
        return view('web.about.edit', compact('lang', 'about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUpdateRequest $request, $lang) {

        $about = About::where('id', 1)->firstOrFail();
        $data=array('paragraph1_spanish' => request('paragraph1_spanish'), 'paragraph2_spanish' => request('paragraph2_spanish'), 'paragraph1_english' => request('paragraph1_english'), 'paragraph2_english' => request('paragraph2_english'), 'list1_spanish' => request('list1_spanish'), 'list2_spanish' => request('list2_spanish'), 'list3_spanish' => request('list3_spanish'), 'list1_english' => request('list1_english'), 'list2_english' => request('list2_english'), 'list3_english' => request('list3_english'));

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $picture = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/about/', $picture);
            $data['picture'] = $picture;
        }

        $about->fill($data)->save();

         //Bitácora

        $activity = 'Ha editado la sección "Nosotros"';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($about && $binnacle) {
            return redirect()->route('sobre.edit', ['lang' => $lang])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Nosotros" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('sobre.edit', ['lang' => $lang])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
