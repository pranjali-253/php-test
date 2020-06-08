<?php

require_once('Database.php');

class CityRepository 
{
    private $database = null;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getAllCities()
    {
        if ($result = $this->database->query("select * from city_weather")) {

            while($row = $result->fetch_assoc()) {
                if(isset($row["city"])){
                    echo "City:"  . $row["city"] ; 
                    echo " ";
                }

                if(isset($row["temperature"])){
                    echo "Temperature: " . $row["temperature"];
                    echo " ";
                }

                if(isset($row["humidity"])){
                    echo "Humidity: " . $row["humidity"]; 
                    echo " ";
                }
                echo "<br>";
                echo "<br>";
              }
            } else {
              echo "0 results";
            }
       
    }

    
}

$database = new Database('localhost', 'root', '', 'weather_information');
$user = new CityRepository($database);
$user->getAllCities();

