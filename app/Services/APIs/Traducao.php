<?php

namespace App\Services\APIs;

use Exception;

class Traducao
{
    private string $texto;
    private $API_KEY;

    public function __construct(string $texto)
    {
        $this->texto = $texto;
        $this->API_KEY = env('API_KEY');
    }

    public  function getTraducao()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://google-translate1.p.rapidapi.com/language/translate/v2",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "q={{$this->texto}}&target=pt-br&source=en",
            CURLOPT_HTTPHEADER => [
                "accept-encoding: application/gzip",
                "content-type: application/x-www-form-urlencoded",
                "x-rapidapi-host: google-translate1.p.rapidapi.com",
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
