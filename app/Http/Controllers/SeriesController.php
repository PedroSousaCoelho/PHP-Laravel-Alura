<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller{
    public function index(){
        //return $request->url();
        //return redirect ('https://youtube.com');

        $series = DB::select('SELECT nome FROM series');

        return view('series.index' ) -> with('series', $series);
    }
    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        Serie::create([$request->all()]);
        return redirect('/series');
    }
}
