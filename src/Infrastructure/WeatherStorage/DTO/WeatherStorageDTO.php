<?php

declare(strict_types=1);

namespace App\Infrastructure\WeatherStorage\DTO;

class WeatherStorageDTO
{
    public string $city;

    public string $weather;

    public string $wind;

    public string $time;

    public string $sunRise;

    public string $sunSet;
}