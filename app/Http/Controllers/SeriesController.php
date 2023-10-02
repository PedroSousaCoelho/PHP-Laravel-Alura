<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeriesController extends Controller{


    public function index(Request $request){
        //return $request->url();
        //return redirect ('https://youtube.com');

        $series = [
            'breaking-Bad',
            'Icaly',
            'Suits'
        ];

        return view('series.index' ) -> with('series', $series);
    }
    public function create(){
        return view('series.create');
    }
}
