<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function send() {

        $this->form_validation->set_rules('to', 'Email Recipient', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[3]|max_length[80]');
        $this->form_validation->set_rules('body', 'Body', 'trim|required|min_length[5]|max_length[250]');

        if ($this->form_validation->run()) {
            $to = $this->input->post('to');
            $subject = $this->input->post('subject');
            $body = $this->input->post('body');

            $this->sendEmail($to, $subject, $body);
        }
        $this->load->view('template/header');
        $this->load->view('send');
        $this->load->view('template/footer');
    }

    private function sendEmail($to, $subject, $body) {
        if (isset($to) && isset($subject)  && isset($body)) {
            $ci = & get_instance();
            $ci->email->set_newline("\r\n");
            $ci->email->from(getenv('SMTP_FROM'), "Team Support");
            $ci->email->to($to);
            $ci->email->subject($subject);
            $ci->email->message($body);

            if ($ci->email->send()) {
                echo "Success - email was sent - " . $to;
                return true;
            }

            show_error($ci->email->print_debugger());
            return false;
        }
    }
}
