<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use App\Binnacle;
use App\InfoContact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ReportStoreRequest;
use Illuminate\Support\Facades\App;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $lang)
    {
        App::setlocale($lang);
        $report = $request->get('report');
        $reports = Report::where('title_spanish','like',"%$report%")
        ->orWhere('title_english','like',"%$report%")
        ->orderBy('id', 'DESC')
        ->paginate(3);
        $info = InfoContact::where('id', 1)->firstOrFail();
        return view('web.reports.index', compact('lang', 'reports', 'info'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        App::setlocale($lang);
        $info = InfoContact::where('id', 1)->firstOrFail();
        return view('web.reports.create', compact('lang', 'info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportStoreRequest $request, $lang)
    {

        $count=Report::where('slug', request("title_spanish"))->count();
        $slug=Str::slug(request("title_spanish"), '-');

        $num=0;
        while (true) {
            $count2 = Report::where('slug', $slug)->count();
            if ($count2>0) {
                $slug=Str::slug(request("title_spanish"), '-')."-".$num;
                $num++;
            } else {
                $data=array('title_spanish' => request('title_spanish'), 'slug' => $slug, 'description_spanish' => request('description_spanish'), 'title_english' => request('title_english'), 'description_english' => request('description_english'), 'user_id' => Auth::user()->id);
                break;
            }
        }

        if ($request->hasFile('pdf_spanish')) {
            $file = $request->file('pdf_spanish');
            $pdf = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/reports/', $pdf);
            $data['pdf_spanish'] = $pdf;
        }

        if ($request->hasFile('pdf_english')) {
            $file = $request->file('pdf_english');
            $pdf = time()."_".$file->getClientOriginalName();
            $file->move(public_path().'/web/images/reports/', $pdf);
            $data['pdf_english'] = $pdf;
        }

        $report=Report::create($data);

        if ($report) {
            return redirect()->route('informe.index', ['lang' => $lang])->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El informe ha sido registrado exitosamente.']);
        } else {
            return redirect()->route('informe.index', ['lang' => $lang])->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        } 

    }
}
