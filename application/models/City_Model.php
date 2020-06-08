<?php 
   class City_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 

      public function getRecords($city) {
        $this->db->select("*");
        $this->db->from("city_weather");
        $this->db->where('city', $city);
        $query = $this->db->get();        
        return $query->result();
      }

      public function insert($data) { 
         if ($this->db->insert("city_weather", $data)) { 
            return true; 
         } 
      }

      public function update($data,$city) { 
         $this->db->set($data); 
         $this->db->where("city", $city); 
         $this->db->update("city_weather", $data); 
      }
      
      
   }
