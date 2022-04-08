<?php

namespace App\Services\APIs;

use Exception;

class Clima
{
    private $API_KEY;
    private string $city;

    public function __construct(string $city)
    {
        $this->city = $city;
        $this->API_KEY = env('API_KEY');
    }

    public  function getClima()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://weatherbit-v1-mashape.p.rapidapi.com/current?city={{$this->city}}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: weatherbit-v1-mashape.p.rapidapi.com",
                "x-rapidapi-key:{$this->API_KEY}"
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
