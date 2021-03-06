<?php

// core/MY_Controller.php
/**
 * Base Controller
 *
 */
class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        // Load any front-end only dependencies
        $this->ini_array = parse_ini_file("server_config.ini", true);
//        wts($this->ini_array);
    }

}

class Frontend_Controller extends MY_Controller {

    public $data_to_header = [];
    public $data_to_view = [];
    public $data_to_footer = [];
    public $header_url = 'templates/header';
    public $footer_url = 'templates/footer';
    public $crumbs_arr = [];

    function __construct() {
        parent::__construct();
        $this->data_to_header['menu_array'] = $this->data_to_footer['menu_array'] = $this->set_menu_array();
    }

    function set_menu_array() {
        $menu_arr = [
            // Tuis
            'tuis' => [
                "text" => "Tuis",
                "url" => "tuis",
                "icon" => "school",
                "seg" => "tuis",
            ],
            // Inligting
            'inligting' => [
                "text" => "Inligting",
                "url" => "inligting",
                "icon" => "signpost",
                "seg" => "inligting",
                "submenu" =>
                [
                    "left" => [
                        [
                            "text" => "Aansoeke & Plasings",
                            "url" => base_url('inligting/aansoeke'),
                        ],
                        [
                            "text" => "Algemeen",
                            "url" => base_url('inligting/algemeen'),
                        ],
                        [
                            "text" => "Benodighede",
                            "url" => base_url('inligting/benodighede'),
                        ],
                        [
                            "text" => "Beserings & siektes",
                            "url" => base_url('inligting/beserings'),
                        ],
                        [
                            "text" => "Buitemuurse Aktiwiteite",
                            "url" => base_url('inligting/buitemuurs'),
                        ],
                    ],
                    "center" => [
                        [
                            "text" => "Dagprogram",
                            "url" => base_url('inligting/dagprogram'),
                        ],
                        [
                            "text" => "Dissipline",
                            "url" => base_url('inligting/dissipline'),
                        ],
                        [
                            "text" => "Kommunikasie",
                            "url" => base_url('inligting/kommunikasie'),
                        ],
                        [
                            "text" => "Medikasie",
                            "url" => base_url('inligting/medikasie'),
                        ],
                        [
                            "text" => "Maaltye",
                            "url" => base_url('inligting/maaltye'),
                        ],
                    ],
                    "right" => [
                        [
                            "text" => "Skoolfooie",
                            "url" => base_url('inligting/skoolfooie'),
                        ],
                        [
                            "text" => "Veiligheid en sekuriteit",
                            "url" => base_url('inligting/veiligheid'),
                        ],
                    ],
                ],
            ],
            // Klasse
            'klasse' => [
                "text" => "Klasse",
                "url" => "klasse",
                "icon" => "schoolbag",
                "seg" => "klasse",
            ],
            // Aflaai
            'aflaai' => [
                "text" => "Aflaai",
                "url" => "aflaai",
                "icon" => "document",
                "seg" => "aflaai",
            ],
            // Kontak
            'kontak' => [
                "text" => "Kontak Ons",
                "url" => "kontak",
                "icon" => "envelope",
                "seg" => "kontak",
            ],
        ];

        return $menu_arr;
    }

    function set_header_bottom($params = []) {
        if (empty($params)) {
            return false;
        }

        $return = '<div class="template-header-bottom" style="margin-top: 0px;">';
        $return .= '<div class="template-header-bottom-background template-header-bottom-background-img-' . $params['bg_img_num'] . ' template-header-bottom-background-style-' . $params['bg_style_num'] . '">';
        $return .= '<div class="template-main">';
        $return .= '<h1>' . $params['heading'] . '</h1>';
        $return .= '<h6>' . $params['sub_heading'] . '</h6>';
        $return .= '</div>';
        $return .= '</div>';
        $return .= '</div>';

        return $return;
    }

    public function recaptcha($str = "") {
        $google_url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = '6LdIPrsZAAAAAMgzh9sO6x7D4NKm_XON5cJrVWPT';
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = $google_url . "?secret=" . $secret . "&response=" . $str . "&remoteip=" . $ip;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $res = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($res, true);
        //reCaptcha success check
        if ($res['success']) {
            return TRUE;
        } else {
            $this->form_validation->set_message('recaptcha', 'Die <b>reCAPTCHA</b> veld dink jy is \'n robot. Probeer asb weer');
            return FALSE;
        }
    }

}
