<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PalindromeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('palindrome_view');
    }

    public function isPalindrome($string)
    {
        $data = array();

        for ($i = 0; $i < strlen($string); $i++) {

            // //fetch the first chararacter and the last chararacter of the string and compare them. 
            //Then fetch the second and the second last char and compare them. Repeat the process 
            //if chararacters are not matching at any point
            // break the loop
            if (substr($string, $i, 1) != substr($string, strlen($string) - ($i + 1), 1)) {

                //if there is mismatch then stop iteration and break from loop and return false
                $data['isPalindrome'] = false;
                break;
            } else {
                $data['isPalindrome'] = true;
            }
        }

        //return boolean to jason object
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}
