<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuis extends Frontend_Controller {
          
	public function index()
	{                        
            $this->load->view($this->header_url, $this->data_to_header);
            $this->load->view('tuis', $this->data_to_view);
            $this->load->view($this->footer_url, $this->data_to_footer);
	}
        
        public function my_404() 
        {
            $this->data_to_header['title']="Page not found";
            
            $this->load->view($this->header_url, $this->data_to_header);
            $this->load->view('404', $this->data_to_view);
            $this->load->view($this->footer_url, $this->data_to_footer);
        }
}
