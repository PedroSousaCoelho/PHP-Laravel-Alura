<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class SeriesControler{
    public function ListarSeries(){
        $series = [
            'Breakin bad',
            'Icarly',
            'Suits'
        ];

        $html =  '<ul>';
        foreach($series as $serie){
            $html = "<li>$serie</li>";
        }

        $html = '</ul>';

        echo $html;
    }
}

