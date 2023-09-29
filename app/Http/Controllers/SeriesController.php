<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeriesController extends Controller{
    public function index(){
        $series = [
            'breaking-Bad',
            'Icaly',
            'Suits'
        ];
        $html = '<ul>';
        foreach($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        print $html;
    }
}
