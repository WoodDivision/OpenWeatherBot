<?php

declare(strict_types=1);

namespace App\Entity;

use Symfony\Bridge\Doctrine;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations\Annotation;


class Weather
{
    private string $id;

    private string $city;

    private string $weather;

    private string $wind;

    private string $time;

    private string $sunRise;

    private string $sunSet;

    public function getId(): string
    {
        return $this->id;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getWeather(): string
    {
        return $this->weather;
    }

    public function getWind(): string
    {
        return $this->wind;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function getSunRise(): string
    {
        return $this->sunRise;
    }

    public function getSunSet(): string
    {
        return $this->sunSet;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function setWeather(string $weather): void
    {
        $this->weather = $weather;
    }

    public function setWind(string $wind): void
    {
        $this->wind = $wind;
    }

    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    public function setSunRise(string $sunRise): void
    {
        $this->sunRise = $sunRise;
    }

    public function setSunSet(string $sunSet): void
    {
        $this->sunSet = $sunSet;
    }
}