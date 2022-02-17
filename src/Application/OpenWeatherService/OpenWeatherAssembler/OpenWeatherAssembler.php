<?php

declare(strict_types=1);

namespace App\Application\OpenWeatherService\OpenWeatherAssembler;

use App\Application\OpenWeatherService\OpenWeatherDTO\OpenWeatherDTO;

class OpenWeatherAssembler
{
    public function assembler(array $data): OpenWeatherDTO
    {
        $dto = new OpenWeatherDTO();
        $dto->city = $data['city'];
        $dto->weather = $data['weather'];
        $dto->time = $data['time'];
        $dto->wind = $data ['wind'];
        $dto->sunRise = $data['sunrise'];
        $dto->sunSet = $data['sunset'];
        return $dto;
    }

}