<?php 

/*
 * (c) Zack Collier <colliezc@miamioh.edu>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Zackcollier\OpenWeatherClient;

class OpenWeatherClient
{
    private $apiKey;

    // create OpenWeatherClient object w/ api key
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    // function that gets weather for given location
    public function getCurrentWeather($location)
    {
	// setup guzzle client
	$client = new \GuzzleHttp\Client();
	// get response from openweather
        $response = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => $location->getCity() . ',' . $location->getState() . ',' . $location->getCountry(),
                'appid' => $this->apiKey,
                'units' => 'imperial'
            ]
        ]);

	// decode response
        $data = json_decode($response->getBody(), true);

	// return new WeatherDay object with details from response
        return new \Zackcollier\OpenWeatherClient\WeatherDay(
            new \DateTime('now'),
            $location,
            'imperial',
            $data['main']['temp'],
            $data['main']['feels_like'],
            $data['main']['pressure'],
            $data['main']['humidity']
        );
    }
}
