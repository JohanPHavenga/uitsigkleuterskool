<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends Frontend_Controller {          
   
    public function index()
    {     
        $hb_params=[
            "bg_img_num"=>1,
            "bg_style_num"=>1,
            "heading"=>"Kontak Ons",
            "sub_heading"=>"Maak kontak met ons",
        ];        
        $this->data_to_header['header_bottom']=$this->set_header_bottom($hb_params);
        $this->data_to_header['page_title'] = "Kontak Ons";
        $this->data_to_header['meta_description'] = "Kontak form";        
        
        
        $this->load->view($this->header_url, $this->data_to_header);
        $this->load->view('kontak', $this->data_to_view);
        $this->load->view($this->footer_url, $this->data_to_footer);
    }
}
