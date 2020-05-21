<?php

namespace App\Http\Controllers;

use App\Banner;
use App\User;
use App\Binnacle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\BannerUpdateSpanishRequest;
use App\Http\Requests\BannerUpdateEnglishRequest;

class BannerController extends Controller
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
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        $banner = Banner::where('id', '1')->firstOrFail();
        return view('web.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(BannerUpdateSpanishRequest $request,  $id) {

        $banner = Banner::where('id', $id)->firstOrFail();

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

        $banner->fill($request->all())->save();

         //Bitácora

        $activity = 'Ha editado la sección "Banner" en Español';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($banner && $binnacle) {
            return redirect()->route('home')->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Banner" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('home')->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    public function updateEnglish(BannerUpdateEnglishRequest $request,  $id) {

        $banner = Banner::where('id', $id)->firstOrFail();

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

        $banner->fill($request->all())->save();

         //Bitácora

        $activity = 'Ha editado la sección "Banner" en Inglés';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($banner && $binnacle) {
            return redirect()->route('home')->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Banner" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('home')->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
