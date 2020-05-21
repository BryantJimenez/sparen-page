<?php

namespace App\Http\Controllers;

use App\About;
use App\User;
use App\Binnacle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AboutUpdateSpanishRequest;
use App\Http\Requests\AboutUpdateEnglishRequest;

class AboutController extends Controller
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
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $about = About::where('id', 1)->firstOrFail();
        return view('web.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUpdateSpanishRequest $request, $id) {

        $about = About::where('id', $id)->firstOrFail();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $picture = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/about/', $picture);
            $data['picture'] = $picture;
        }

        $about->fill($request->all())->save();

         //Bitácora

        $activity = 'Ha editado la sección "Nosotros" en español';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($about && $binnacle) {
            return redirect()->route('home.sobre')->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Nosotros" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('home.sobre')->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

     public function updateEnglish(AboutUpdateEnglishRequest $request, $id) {

        $about = About::where('id', $id)->firstOrFail();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $picture = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/about/', $picture);
            $data['picture'] = $picture;
        }

        $about->fill($request->all())->save();

         //Bitácora

        $activity = 'Ha editado la sección "Nosotros" en inglés';
        $us = Auth::user()->id;
        $data = array('user_id' => $us, 'activity' => $activity );
        $binnacle = Binnacle::create($data);

        //Fin Bitácora


        if ($about && $binnacle) {
            return redirect()->route('home.sobre')->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La sección "Nosotros" ha sido editada exitosamente.']);
        } else {
            return redirect()->route('home.sobre')->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
