<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class WeatherController extends CI_Controller {
   
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
    }
   
    /**
     * index method for calling WeaterView.
    */
    public function index()
    {
        $this->load->view('weather');
    }
         
}