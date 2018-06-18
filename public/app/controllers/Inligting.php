<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inligting extends Frontend_Controller {        
    
    // check if method exists, if not calls "index" method
    public function _remap($method, $params = array())
    {
        // move dashes from method name
        $check_method= str_replace("-", "_", $method);
        if (method_exists($this, $check_method))
        {
            return call_user_func_array(array($this, $check_method), $params);
        }
        else
        {
            $this->index($method, $params = array());
        }
    }
   
    public function index($info_piece="index")
    {                   
        $ini_array = parse_ini_file("webdata.ini", true);
        $this->data_to_view['web_data']=$ini_array;
        
        $hb_params=[
            "bg_img_num"=>2,
            "bg_style_num"=>1,
            "heading"=>"Inligting",
            "sub_heading"=>"Algemene inligting oor ons kleuterskool",
        ];        
        $this->data_to_header['header_bottom']=$this->set_header_bottom($hb_params);
        $this->data_to_header['page_title'] = "Inligting";
        $this->data_to_header['meta_description'] = "Algemene inligting oor ons kleuterskool";        
                
        $this->load->view($this->header_url, $this->data_to_header);        
        $this->load->view('inligting/'.$info_piece, $this->data_to_view);
        $this->load->view('templates/enroll',["bg_color"=>2]);
        $this->load->view($this->footer_url, $this->data_to_footer);
    }
        
}
