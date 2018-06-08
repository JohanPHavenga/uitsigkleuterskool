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
        $this->data_to_header['menu_array']=$this->set_menu_array();
        
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
                "url"=>"#",
                "icon"=>"signpost",
                "seg"=>"inligting",
                "submenu"=>
                [   
                    "left"=>[
                                [
                                "text"=>"Aansoeke & Plasings",
                                "url"=>'',
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
}