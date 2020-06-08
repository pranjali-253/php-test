<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CityController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('City_Model');
    }

    public function index()
    {
        $city = $this->input->post('city');
        $data= $this->readWeatherData($city);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function readWeatherData($city)
    {
        $data = $this->City_Model->getRecords($city);

        date_default_timezone_set('Asia/Kolkata');

        if (isset($data[0]->city) == $city) {
            $updatedOn = $data[0]->updated_on;
            $currentTime = date('Y-m-d H:i:s', strtotime('now'));
            $timeBeforeTenMins = date('Y-m-d H:i:s', strtotime('now -10 minutes'));

            $currentTimeStamp = strtotime($currentTime);
            $updatedOnTimeStamp = strtotime($updatedOn);
            $timeBeforeTenMinsTimeStamp = strtotime($timeBeforeTenMins);
            
            if (($updatedOnTimeStamp < $currentTimeStamp) && ($updatedOnTimeStamp > $timeBeforeTenMinsTimeStamp)) {
                //fetch record from db for this particular city
                return $data[0];

            }
            
            else if ($updatedOnTimeStamp < $timeBeforeTenMinsTimeStamp) {
                //call api and return data from api and update the db
                $cityData = $this->callWeatherApi($city);
                $cityData['updated_on'] = date('Y-m-d H:i:s', strtotime('now'));
                $this->City_Model->update($cityData, $city);

                return $cityData;
            }

        } 
        
        else {
            // call api and insert record for this particular city in DB
            $cityData = $this->callWeatherApi($city);
            $cityData['created_on'] = date('Y-m-d H:i:s', strtotime('now'));
            $cityData['updated_on'] = date('Y-m-d H:i:s', strtotime('now'));
            $this->City_Model->insert($cityData);

            return $cityData;
        }
    }

    // Weather Api call

    public function callWeatherApi($city)
    {
        $url = "http://openweathermap.org/data/2.5/weather?appid=439d4b804bc8187953eb36d2a8c26a02&q=$city";
        $json = file_get_contents($url);
        $data = json_decode($json);
        $weatherData = array();

        $weatherData['city'] = $city;
        $weatherData['temperature'] = $data->main->temp;
        $weatherData['humidity'] = $data->main->humidity;
        $weatherData['pressure'] = $data->main->pressure;
        $weatherData['speed'] = $data->wind->speed;

        return $weatherData;
    }
}
