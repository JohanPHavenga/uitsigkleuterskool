<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasse extends Frontend_Controller {          
   
    public function index()
    {           
        $hb_params=[
            "bg_img_num"=>6,
            "bg_style_num"=>1,
            "heading"=>"Ons Klasse",
            "sub_heading"=>"Ontmoet die personeel",
        ];        
        $this->data_to_header['header_bottom']=$this->set_header_bottom($hb_params);
        $this->data_to_header['page_title'] = "Ons Klasse";
        $this->data_to_header['meta_description'] = "Ons Klasse";        
        
        $ini_array = parse_ini_file("webdata.ini", true);
        $this->data_to_view['klas_data']=$ini_array['klasse'];
        
        $this->load->view($this->header_url, $this->data_to_header);
        $this->load->view('klasse', $this->data_to_view);
        $this->load->view('templates/enroll',["bg_color"=>2]);
        $this->load->view($this->footer_url, $this->data_to_footer);
    }
        
}
