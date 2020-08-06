<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends Frontend_Controller {

    public function index() {
        $hb_params = [
            "bg_img_num" => 1,
            "bg_style_num" => 1,
            "heading" => "Kontak Ons",
            "sub_heading" => "Maak kontak met ons",
        ];
        $this->data_to_header['header_bottom'] = $this->set_header_bottom($hb_params);
        $this->data_to_header['page_title'] = "Kontak Ons";
        $this->data_to_header['meta_description'] = "Kontak form";

        $this->data_to_view['form_url'] = '/kontak';
        $this->data_to_view['error_url'] = '/kontak';

        $this->data_to_footer['scripts_to_load'] = ["https://www.google.com/recaptcha/api.js"];


        // validation rules
        $this->form_validation->set_rules('user_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('user_surname', 'Surname', 'trim|required');
        $this->form_validation->set_rules('user_email', 'email address', 'trim|required|valid_email');
        $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha');

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
                "to" => $this->ini_array['email']['from_address_server'],
                "body" => "<h3>Kontak Vorm</h3><p>"
                . "<b>Naam:</b> " . $email_data['contact-form-name'] . "<br>"
                . "<b>Epos:</b> " . $email_data['contact-form-email'] . "</p>"
                . "<p style='padding-left: 15px; padding-bottom:0; margin: 20px 0; border-left: 4px solid #ccc;'><b>Comment:</b><br>" . nl2br($email_data['contact-form-message']) . "</p>",
                "subject" => "Web kontak: ".$email_data['contact-form-subject'],
                "from" => $email_data['contact-form-email'],
                "from_name" => $email_data['contact-form-name'],
            ];
        echo $data['body'];
        wts($data,1);
            $this->set_email($data);

            // send mail to user
            $data['to'] = $email_data['user_email'];
            $this->set_email($data);

            $this->session->set_flashdata([
                'alert' => "Your contact email has been send",
                'status' => "success",
                'icon' => "check-circle",
                'confirm_msg' => 'Thank you for contacting me. I will get back to you as soon as I can!',
                'confirm_btn_txt' => 'Return',
                'confirm_btn_url' => base_url(),
            ]);

            redirect(base_url("contact/confirm"));
        }
    }

}
