<?php

namespace App\Http\Controllers;

use App\Binnacle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class BinnacleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        App::setlocale($lang);
        $binnacle = Binnacle::all();
        $num = 1;

        return view('web.binnacle', compact('lang', 'binnacle', 'num'));
    }
}