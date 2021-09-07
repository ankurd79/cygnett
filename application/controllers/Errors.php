<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Errors extends CI_Controller 
{

    // Main controller for the contact form
    public function error404()
    {
        // Create your custom controller

        // Display page
        //$this->load->view('templates/header');
        $this->output->set_status_header('404');
        $this->load->view('errors/html/custom_404');
        //$this->load->view('templates/footer');
    }
}
?>