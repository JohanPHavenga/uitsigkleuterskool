<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aflaai extends Frontend_Controller {          
   
    public function index()
    {                   
        // kryh dokumente in uplods folder
        $this->load->helper('file');    
        $file_arr = get_filenames("uploads");       
        $this->data_to_view["file_arr"]=$file_arr;
        
        $hb_params=[
            "bg_img_num"=>4,
            "bg_style_num"=>1,
            "heading"=>"Aflaai",
            "sub_heading"=>"Dokumente beskikbaar om afgelaai te word",
        ];        
        $this->data_to_header['header_bottom']=$this->set_header_bottom($hb_params);
        $this->data_to_header['page_title'] = "Dokumente Aflaai";
        $this->data_to_header['meta_description'] = "Bladsy waar dokumente afgelaai kan word";        
        
        
        $this->load->view($this->header_url, $this->data_to_header);
        $this->load->view('aflaai', $this->data_to_view);
        $this->load->view('templates/enroll',["bg_color"=>2]);
        $this->load->view($this->footer_url, $this->data_to_footer);
    }
    
    public function download($fileName = NULL) {
        $this->load->helper('download');
        if ($fileName) {
            $fileName=str_replace("%20"," ",$fileName);
            $file = realpath("uploads") . "\\" . $fileName;
                        
//            wts($file);
//            exit();
            
            // check file exists    
            if (file_exists($file)) {
                // get file content
                $data = file_get_contents($file);
                //force download
                force_download($fileName, $data);
            } else {
                // Redirect to base url
                redirect(base_url("aflaai"));
            }
        }
    }
        
}
