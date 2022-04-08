<?php

namespace App\Http\Controllers;

use App\Services\APIs\{Clima, Coordenadas, Traducao};
use App\Services\Cache\DadosEmCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class NowController extends Controller
{
    //
    public function index(Request $request)
    {
        // $ip_user = $_SERVER["REMOTE_ADDR"];

        /**
         * As API's foram comentadas para que, em teste, o limite
         * de reqisições não exceda.
         */

        //request API;
        // $coordenadas = new Coordenadas("131.196.147.72");
        // $local = $coordenadas->getCoordenada();
        // $local = json_decode($local);
        // $city = $local->city;
        // $region = $local->region;

        // $city = "Itajubá";
        // $clima = new Clima($city);
        // $data = $clima->getClima();
        // $data = json_decode($data);
        // $dia = explode(" ", $data->data[0]->ob_time);
        // $diaHoje = $dia[0];

        // $fuso = $data->data[0]->timezone;
        // $city = $data->data[0]->city_name;
        // $clima = $data->data[0]->weather->description;

        // $traducao = new Traducao($clima);
        // $data_traducao = $traducao->getTraducao();
        // $data_traducao = json_decode($data_traducao);
        // dd($data_traducao);
        // $clima = $data_traducao->data->translations[0]->translatedText;
        // $clima = "Nublado";

        $city = "Itajubá";
        $region = "Minas Gerais";
        $fuso = "Brasília";
        $clima = "Céu Limpo";
        $diaHoje = "2022-04-04";

        return view('now.index', compact('city', 'region', 'fuso', 'clima', 'diaHoje'));
    }
}
