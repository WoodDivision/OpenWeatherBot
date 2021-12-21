<?php
declare(strict_types=1);

namespace App\Application\OpenWeatherAPI\OpenWeatherAssembler;

use App\Application\OpenWeatherAPI\OpenWeatherDTO\OpenWeatherDTO;

class OpenWeatherAssembler
{
    public function assembler(array $data) : OpenWeatherDTO
    {
        $dto = new OpenWeatherDTO();

        return $dto;
    }

}