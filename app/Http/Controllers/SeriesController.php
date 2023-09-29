namespace App\Http\Controllers;

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
