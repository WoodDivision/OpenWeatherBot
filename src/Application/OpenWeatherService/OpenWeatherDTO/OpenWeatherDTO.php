<?php

declare(strict_types=1);

namespace App\Application\OpenWeatherService\OpenWeatherDTO;

class OpenWeatherDTO
{
    public string $city;

    public string $weather;

    public string $wind;

    public string $time;

    public string $sunRise;

    public string $sunSet;
}