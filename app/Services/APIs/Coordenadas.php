<?php

namespace App\Services\APIs;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class Coordenadas
{
    private string $ip_user;
    private $API_KEY;

    public function __construct(string $ip_user)
    {
        $this->ip_user = $ip_user;
        $this->API_KEY = env('API_KEY');
    }

    public  function getCoordenada()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ip-location5.p.rapidapi.com/get_geo_info",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "ip={$this->ip_user}",
            CURLOPT_HTTPHEADER => [
                "content-type: application/x-www-form-urlencoded",
                "x-rapidapi-host: ip-location5.p.rapidapi.com",
                "x-rapidapi-key: {$this->API_KEY}"
            ],
        ]);

        try {
            return curl_exec($curl);
        } catch (Exception $err) {
            return $err;
        } finally {
            curl_close($curl);
        }
    }
}
