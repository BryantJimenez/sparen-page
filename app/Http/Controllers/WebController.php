<?php

namespace App\Http\Controllers;

use App\User;
use App\About;
use App\Service;
use App\Consultancy;
use App\Objective;
use App\Banner;
use App\Binnacle;
use App\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        App::setlocale($lang);

        $about = About::where('id', 1)->firstOrFail();
        $service = Service::where('id', 1)->firstOrFail();
        $consultancy = Consultancy::where('id', 1)->firstOrFail();
        $objective = Objective::where('id', 1)->firstOrFail();
        $banner = Banner::where('id', 1)->firstOrFail();
        $reports = Report::all()->count();
        
        return view('web.home', compact('about', 'service', 'consultancy', 'objective', 'banner', 'reports', 'lang'));
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
     * @param  \App\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(Web $web)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit(Web $web)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Web $web)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy(Web $web)
    {
        //
    }

}
