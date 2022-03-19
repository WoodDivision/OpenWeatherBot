<?php

declare(strict_types=1);

namespace App\Application\OpenWeatherService;

use App\Infrastructure\OpenWeatherAPI\OpenWeatherApiInterface;

class OpenWeatherApiService implements OpenWeatherApiInterface
{
    public function getOpenWeatherAPI(string $city): string|bool
    {
        try {
            $curl = curl_init(
                "api.openweathermap.org/data/2.5/weather?q=$city&units=metric&time=UTC&appid=eeb8b590b300ceecfe297ac9ce9284df"
            );
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_VERBOSE, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $data = curl_exec($curl);
            curl_close($curl);
        } catch (\Error $e) {
            echo $e->getMessage();
        }
        return $data;
    }
}
