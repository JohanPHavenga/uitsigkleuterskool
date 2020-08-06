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
    }

    public function send_mail($data) {
        $this->load->library('email');

        $config['mailtype'] = 'html';
        $config['smtp_host'] = $this->ini_array['email']['smtp_server'];
        $config['smtp_port'] = $this->ini_array['email']['smtp_port'];
        $config['smtp_crypto'] = $this->ini_array['email']['smtp_crypto'];
        $config['charset'] = $this->ini_array['email']['email_charset'];
        $config['useragent'] = $this->ini_array['email']['useragent'];
        $this->email->initialize($config);

        $this->email->from($data['emailque_from_address'], $data['emailque_from_name']);
        $this->email->to($data['emailque_to_address'], $data['emailque_to_name']);
        if ($data['emailque_cc_address']) {
            $this->email->cc($data['emailque_cc_address']);
        }
        if ($data['emailque_bcc_address']) {
            $bcc_arr[$data['emailque_bcc_address']] = $data['emailque_bcc_address'];
        }
        $bcc_arr[$this->ini_array['email']['bcc_address']] = $this->ini_array['email']['bcc_address'];
        $this->email->bcc($bcc_arr);
        $this->email->subject($data['emailque_subject']);
        $this->email->message($data['emailque_body']);

        wts($data);
        wts($this->email,1);

        $send = $this->email->send();

        return $send;
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

}
