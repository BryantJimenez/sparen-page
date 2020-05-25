<?php

namespace App\Http\Controllers;

use App\User;
use App\About;
use App\Service;
use App\Objective;
use App\Banner;
use App\InfoContact;
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
        $info = InfoContact::where('id', 1)->firstOrFail();
        $objective = Objective::where('id', 1)->firstOrFail();
        $banner = Banner::where('id', 1)->firstOrFail();
        
        return view('web.home', compact('about', 'service', 'info', 'objective', 'banner', 'lang'));
    }
}
