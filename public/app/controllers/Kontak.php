<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $hb_params = [
            "bg_img_num" => 1,
            "bg_style_num" => 1,
            "heading" => "Kontak Ons",
            "sub_heading" => "Maak kontak met ons",
        ];
        $this->data_to_header['header_bottom'] = $this->set_header_bottom($hb_params);
        $this->data_to_header['page_title'] = "Kontak Ons";
        $this->data_to_header['meta_description'] = "Kontak vorm";

        $this->data_to_view['form_url'] = '/kontak';
        $this->data_to_view['error_url'] = '/kontak';

        $this->data_to_footer['scripts_to_load'] = ["https://www.google.com/recaptcha/api.js"];


        // validation rules
        $this->form_validation->set_rules('contact-form-name', 'Naam', 'trim|required', ["required" => "Naam veld is leeg"]);
        $this->form_validation->set_rules('contact-form-email', 'Epos adres', 'trim|required|valid_email',
                [
                    "required" => "Epos adres veld is leeg",
                    "valid_email" => "Sleutel asb 'n geldige epos adres in"
        ]);
        $this->form_validation->set_rules('contact-form-subject', 'Onderwerp', 'trim|required', ["required" => "Onderwerp veld is leeg"]);
        $this->form_validation->set_rules('contact-form-message', 'Boodskap', 'trim|required', ["required" => "Boodskap veld is leeg"]);
        $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha', ["callback_recaptcha"=>"Klik asb op die reCAPTCHA"]);
        // load correct view
        if ($this->form_validation->run() === FALSE) {
//            $this->load->view($this->header_url, $this->data_to_views);
//            $this->load->view($this->notice_url, $this->data_to_views);
//            $this->load->view('contact/contact', $this->data_to_views);
//            $this->load->view($this->footer_url, $this->data_to_views);

            $this->load->view($this->header_url, $this->data_to_header);
            $this->load->view('kontak', $this->data_to_view);
            $this->load->view($this->footer_url, $this->data_to_footer);
        } else {
            // set user_data from post
            foreach ($this->input->post() as $field => $value) {
                $email_data[$field] = $value;
            }
            // send to info@roadrunning
            $data = [
                "to" => $this->ini_array['email']['from_address'],
                "body" => "<h3>Website Kontak Vorm</h3><p>"
                . "<b>Naam:</b> " . $email_data['contact-form-name'] . "<br>"
                . "<b>Epos:</b> " . $email_data['contact-form-email'] . "</p>"
                . "<p style='padding-left: 15px; padding-bottom:0; margin: 20px 0; border-left: 4px solid #ccc;'><b>Boodskap:</b><br>" . nl2br($email_data['contact-form-message']) . "</p>",
                "subject" => "Web kontak: " . $email_data['contact-form-subject'],
                "from" => $email_data['contact-form-email'],
                "from_name" => $email_data['contact-form-name'],
            ];

//            echo $data['body'];
//            wts($data,1);

            $this->send_contact_mail($data);

            // send mail to user
            $data['to'] = $email_data['contact-form-email'];
            $this->send_contact_mail($data);

            $this->session->set_flashdata([
                'alert' => "Boodskap gestuur",
                'status' => "success",
                'icon' => "check-circle",
                'confirm_msg' => 'Dankie dat jy ons gekontak het. Ons kom terug na jou toe so gou moontlik!',
                'confirm_btn_txt' => 'Gaan Terug',
                'confirm_btn_url' => base_url(),
            ]);

            redirect(base_url("kontak/bevestig"));
        }
    }

    public function send_contact_mail($data) {
        $this->load->library('email');

        $config['mailtype'] = 'html';
        $config['smtp_host'] = $this->ini_array['email']['smtp_server'];
        $config['smtp_port'] = $this->ini_array['email']['smtp_port'];
        $config['smtp_crypto'] = $this->ini_array['email']['smtp_crypto'];
        $config['charset'] = $this->ini_array['email']['email_charset'];
        $config['useragent'] = $this->ini_array['email']['useragent'];
        $this->email->initialize($config);

        $this->email->from($data['from'], $data['from_name']);
        $this->email->to($data['to']);
        $bcc_arr[$this->ini_array['email']['bcc_address']] = $this->ini_array['email']['bcc_address'];
        $this->email->bcc($bcc_arr);
        $this->email->subject($data['subject']);
        $this->email->message($data['body']);

//        wts($data);
//        wts($this->email, 1);

        $send = $this->email->send();

        return $send;
    }

    // GENERIC CONFIRMATION PAGE
    function bevestig() {

        $hb_params = [
            "bg_img_num" => 1,
            "bg_style_num" => 1,
            "heading" => "Kontak Ons",
            "sub_heading" => "Maak kontak met ons",
        ];
        $this->data_to_header['header_bottom'] = $this->set_header_bottom($hb_params);
        $this->data_to_header['page_title'] = "Kontak Ons";
        $this->data_to_header['meta_description'] = "Kontak vorm bevestiging";

        if ($this->session->flashdata('confirm_msg') !== null) {
            $this->load->view($this->header_url, $this->data_to_header);
            $this->load->view('kontak_bevestig', $this->data_to_view);
            $this->load->view($this->footer_url, $this->data_to_footer);
        } else {
            redirect(base_url());
        }
    }

}
