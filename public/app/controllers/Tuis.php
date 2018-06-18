<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuis extends Frontend_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->data_to_header['header_bottom']=$this->set_header_bottom();
    }
         
    public function index()
    {                        
        $ini_array = parse_ini_file("webdata.ini", true);
        $this->data_to_view['web_data']=$ini_array;
        
        $this->load->view($this->header_url, $this->data_to_header);
        $this->load->view('templates/banner', $this->data_to_view);
        $this->load->view('templates/enroll', $this->data_to_view);
        $this->load->view('tuis', $this->data_to_view);
        $this->load->view($this->footer_url, $this->data_to_footer);
    }

    public function my_404() 
    {
        $this->data_to_header['title']="Bladsy nie gevind";

        $this->load->view($this->header_url, $this->data_to_header);
        $this->load->view('404', $this->data_to_view);
        $this->load->view($this->footer_url, $this->data_to_footer);
    }
}
