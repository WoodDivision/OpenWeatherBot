<?php

declare(strict_types=1);

namespace App\Infrastructure\OpenWeatherAPI;

interface OpenWeatherApiInterface
{
    public function getOpenWeatherAPI(string $city): string|bool;

}