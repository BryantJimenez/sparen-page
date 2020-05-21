<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use App\Binnacle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ReportStoreSpanishRequest;
use App\Http\Requests\ReportStoreEnglishRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $report = $request->get('report');
        $reports = Report::where('title_spanish','like',"%$report%")
        ->orderBy('id', 'DESC')
        ->paginate(3);
        return view('web.reports.index', compact('reports'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('web.reports.create');
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportStoreSpanishRequest $request)
    {


        // Validación para que no se repita el slug (si el pdf es en español)

        // if ($request->has('title_spanish')) {

        //     $count=Report::where('title_spanish', $request->title_spanish)->count();
        //     $slug=Str::slug($request->title_spanish, '-');
        //     if ($count>0) {
        //         $slug=$slug."-".$count;
        //         $num=0;
        //         while (true) {
        //             $count2 = Report::where('slug', $slug)->count();
        //             if ($count2>0) {
        //                 $slug=$slug."-".$num;
        //                 $num++;
        //             } else {
        //                 $data=array('title_spanish' => request('title_spanish'), 'slug' => $slug, 'pdf_spanish' => $request->pdf_spanish, 'description_spanish' => request('description_spanish'), 
        //                     'user_id' => Auth::user()->id);
        //                 break;
        //             }
        //         }
        //     }

        //       if ($request->hasFile('pdf_spanish')) {
        //         $file = $request->file('pdf_spanish');
        //         $pdf = time()."_".$file->getClientOriginalName();
        //         $file->move(public_path().'/web/images/reports/', $pdf);
        //         $data['pdf_spanish'] = $pdf;

        //     }

        //      // Validación para que no se repita el slug (si el pdf es en inglés)

        // } else{

        //     $count=Report::where('title_english', request('title_english'))->count();

        //     $slug=Str::slug(request('title_english'), '-');
        //     if ($count>0) {
        //         $slug=$slug."-".$count;
        //     }

        //     $num=0;
        //     while (true) {
        //         $count2 = Report::where('slug', $slug)->count();
        //         if ($count2>0) {
        //             $slug=$slug."-".$num;
        //             $num++;
        //         } else {
        //             $data=array('title_english' => request('title_english'), 'slug' => $slug, 'pdf_english' => request('pdf_english'), 'description_english' => request('description_english'), 'user_id' => Auth::user()->id);
        //             break;
        //         }
        //     }


        //     if ($request->hasFile('pdf_english')) {
        //         $file = $request->file('pdf_english');
        //         $pdf = time()."_".$file->getClientOriginalName();
        //         $file->move(public_path().'/web/images/reports/', $pdf);
        //         $data['pdf_english'] = $pdf;

        //     }


        // }

        
        // $report=Report::create($data);

        // if ($report) {
        //     return redirect()->route('informe.index')->with(['type' => 'success', 'title' => 'Registro exitoso', 'msg' => 'El informe ha sido registrado exitosamente.']);
        // } else {
        //     return redirect()->route('informe.index')->with(['type' => 'error', 'title' => 'Registro fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        // } 
    }

    public function storeEnlgish(ReportStoreEnglishRequest $request) {

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
