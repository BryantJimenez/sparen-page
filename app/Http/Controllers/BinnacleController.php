<?php

namespace App\Http\Controllers;

use App\Binnacle;
use App\InfoContact;
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
        $binnacle = Binnacle::orderBy('id', 'DESC')->get();
        $num = 1;
        $info = InfoContact::where('id', 1)->firstOrFail();
        return view('web.binnacle', compact('lang', 'binnacle', 'num', 'info'));
    }
}