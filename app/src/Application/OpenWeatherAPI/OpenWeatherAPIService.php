<?php

declare(strict_types=1);

namespace App\Application\OpenWeatherAPI;

use Error;

class OpenWeatherAPIService implements OpenWeatherAPIInterface
{

    public function getOpenWeatherAPI():array
    {
        try {
            $curl = curl_init("api.openweathermap.org/data/2.5/weather?q=Moscow&appid=eeb8b590b300ceecfe297ac9ce9284df");
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_VERBOSE, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
            curl_close($curl);
        } catch (Error $e) {
            echo $e->getMessage();
        }
        $json = json_decode($response);

        return $json;
    }

}


