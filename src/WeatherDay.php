<?php 

/*
 * (c) Zack Collier <colliezc@miamioh.edu>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Zackcollier\OpenWeatherClient;

class WeatherDay
{
    private $date;
    private $unit;
    private $temperature;
    private $feelsLike;
    private $pressure;
    private $humidity;    

    // create WeatherDay object with various parameters
    public function __construct($date, $location, $unit, $temperature, $feelsLike, $pressure, $humidity)
    {
        $this->date = $date;
        $this->unit = $unit;
        $this->temperature = $temperature;
        $this->feelsLike = $feelsLike;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
    }

    // return date of WeatherDay
    public function getDate()
    {
        return $this->date;
    }

    // return unit of WeatherDay
    public function getUnit()
    {
        return $this->unit;
    }

    // return temperature of WeatherDay
    public function getTemperature()
    {
        return $this->temperature;
    }

    // return FeelsLike temp of WeatherDay
    public function getFeelsLike()
    {
        return $this->feelsLike;
    }

    // return pressure of WeatherDay
    public function getPressure()
    {
        return $this->pressure;
    }

    // return humidity of WeatherDay
    public function getHumidity()
    {
        return $this->humidity;
    }
}
