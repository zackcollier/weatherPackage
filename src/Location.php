<?php 

/*
 * (c) Zack Collier <colliezc@miamioh.edu>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Zackcollier\OpenWeatherClient;

class Location
{
    private $city;
    private $state;
    private $country;

    // create new Location object with city/state/country data
    public function __construct($city, $state, $country)
    {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    // return city of Location
    public function getCity()
    {
        return $this->city;
    }

    // return state of Location
    public function getState()
    {
        return $this->state;
    }

    // return country of Location
    public function getCountry()
    {
        return $this->country;
    }
}
