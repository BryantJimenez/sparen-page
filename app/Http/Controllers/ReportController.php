<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use App\Binnacle;
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
        ->orderBy('id', 'DESC')
        ->paginate(3);
        return view('web.reports.index', compact('lang', 'reports'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        App::setlocale($lang);
        return view('web.reports.create', compact('lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportStoreRequest $request)
    {

        $count=Report::where('slug', "report-spanish")->count();
        $slug=Str::slug("report-spanish", '-');

        $num=0;
        while (true) {
            $count2 = Report::where('slug', $slug)->count();
            if ($count2>0) {
                $slug="report-spanish-".$num;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
