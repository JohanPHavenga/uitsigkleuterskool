<?php
// core/MY_Controller.php
/**
 * Base Controller
 *
 */
class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // Load any front-end only dependencies
    }

}


class Frontend_Controller extends MY_Controller {

    public $data_to_header=[];
    public $data_to_view=[];
    public $data_to_footer=[];

    public $header_url='templates/header';
    public $footer_url='templates/footer';

    public $crumbs_arr=[];

    function __construct()
    {
        parent::__construct();
        $this->data_to_header['menu_array']=$this->data_to_footer['menu_array']=$this->set_menu_array();
        
//        $this->load->model('property_model');
                
    }
    
    function set_menu_array() {
        $menu_arr = [
            // Tuis
            [
                "text"=>"Tuis",
                "url"=>"tuis",
                "icon"=>"school",
                "seg"=>"tuis",
            ],
            // Inligting
            [
                "text"=>"Inligting",
                "url"=>"inligting",
                "icon"=>"signpost",
                "seg"=>"inligting",
                "submenu"=>
                [   
                    "left"=>[
                                [
                                "text"=>"Aansoeke & Plasings",
                                "url"=>'inligting/aansoeke',
                                ],
                                [
                                "text"=>"Algemeen",
                                "url"=>'',
                                ],
                                [
                                "text"=>"Benodighede",
                                "url"=>'',
                                ],
                                [
                                "text"=>"Beserings & siektes",
                                "url"=>'',
                                ],
                                [
                                "text"=>"Buitemuurse Aktiwiteite",
                                "url"=>'',
                                ],
                            ],
                    "center"=>[
                                [
                                "text"=>"Dagprogram",
                                "url"=>'',
                                ],
                                [
                                "text"=>"Dissipline",
                                "url"=>'',
                                ],
                                [
                                "text"=>"Klasindelings",
                                "url"=>'',
                                ],
                                [
                                "text"=>"Kommunikasie",
                                "url"=>'',
                                ],
                                [
                                "text"=>"Maaltye",
                                "url"=>'',
                                ],
                            ],
                    "right"=>[
                                [
                                "text"=>"Skoolfooie",
                                "url"=>'',
                                ],
                                [
                                "text"=>"Veiligheid en sekuriteit",
                                "url"=>'',
                                ],
                            ],
                ],
            ],
            // Klasse
            [
                "text"=>"Klasse",
                "url"=>"klasse",
                "icon"=>"schoolbag",
                "seg"=>"klasse",
            ],
            // Aflaai
            [
                "text"=>"Aflaai",
                "url"=>"aflaai",
                "icon"=>"document",
                "seg"=>"aflaai",
            ],
            // Kontak
            [
                "text"=>"Kontak Ons",
                "url"=>"kontak",
                "icon"=>"envelope",
                "seg"=>"kontak",
            ],
        ];
        
        return $menu_arr;
    }
    
    
    function set_header_bottom($params=[]) {        
        if (empty($params)) { return false; }
        
        $return = '<div class="template-header-bottom" style="margin-top: 0px;">';
        $return .= '<div class="template-header-bottom-background template-header-bottom-background-img-'.$params['bg_img_num'].' template-header-bottom-background-style-'.$params['bg_style_num'].'">';
        $return .= '<div class="template-main">';
        $return .= '<h1>'.$params['heading'].'</h1>';
        $return .= '<h6>'.$params['sub_heading'].'</h6>';
        $return .= '</div>';
        $return .= '</div>';
        $return .= '</div>';
        
        return $return;
    }
}