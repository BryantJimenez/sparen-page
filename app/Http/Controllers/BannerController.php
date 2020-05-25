<?php

namespace App\Http\Controllers;

use App\Banner;
use App\User;
use App\Binnacle;
use App\InfoContact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\BannerUpdateRequest;
use Illuminate\Support\Facades\App;

class BannerController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($lang)
    {
        App::setlocale($lang);
        $banner = Banner::where('id', '1')->firstOrFail();
        $info = InfoContact::where('id', 1)->firstOrFail();
        return view('web.banner.edit', compact('lang', 'banner', 'info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(BannerUpdateRequest $request, $lang) {
        $banner = Banner::where('id', 1)->firstOrFail();

        $data=array('banner1_spanish' => nl2br(request('banner1_spanish')), 'banner2_spanish' => nl2br(request('banner2_spanish')), 'banner3_spanish' => nl2br(request('banner3_spanish')), 'banner1_english' => nl2br(request('banner1_english')), 'banner2_english' => nl2br(request('banner2_english')), 'banner3_english' => nl2br(request('banner3_english')));

        if ($request->hasFile('picture1')) {
            $file = $request->file('picture1');
            $picture1 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/banner/', $picture1);
            $data['picture1'] = $picture1;
        }

         if ($request->hasFile('picture2')) {
            $file = $request->file('picture2');
            $picture2 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/banner/', $picture2);
            $data['picture2'] = $picture2;
        }

         if ($request->hasFile('picture3')) {
            $file = $request->file('picture3');
            $picture3 = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/banner/', $picture3);
            $data['picture3'] = $picture3;
        }

        $banner->fill($data)->save();

        //Bitácora

        $activity = 'Ha editado la sección "Banner"';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data)->save();

        //Fin Bitácora


        if ($banner && $binnacle) {
            return redirect()->route('banner.edit', ['lang' => $lang])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Banner" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('banner.edit', ['lang' => $lang])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }
}
