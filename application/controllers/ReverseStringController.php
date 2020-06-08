<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReverseStringController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('reverse_view');
    }

    public function reverse($string)
    {
        $reverse = '';
        $i = 0;

        while (!empty($string[$i])) {

            //store first character in first iteration and store it in a variable then
            // append second character to that variable and repeat the process till the string is empty.
            $reverse = $string[$i] . $reverse;
            $i++;
        }

        //return boolean value to jason object
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($reverse));
    }
}
