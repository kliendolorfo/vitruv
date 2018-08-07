<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memail extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('email');
    }
	
	public function memail()
	{
        $firstname = $this->input->post('fname');
        $lastname = $this->input->post('lname');
        $email = $this->input->post('email');
        $companyname = $this->input->post('companyname');
        $contact = $this->input->post('contactnumber');

        $sender = $firstname." ".$lastname;
        $message = "Hi Vitruv! I'm ".$firstname." ".$lastname." from ".$companyname.". I am interested to your product please contact me provide in this email ".$contact." ".$email." Thank you very much!";

        $config["protocol"] = "smtp";
        $config["smtp_host"] = "ssl://smtp.gmail.com";
        $config["smtp_port"] = "465";
        $config["smtp_timeout"] = "7";
        $config["smtp_user"] = "kiendolorfo@gmail.com";
        $config["smtp_pass"] = "<13ndolorfo";
        $config["charset"] = "utf-8";
        $config["newline"] = "\r\n";
        $config["mailtype"] = "html"; // or text
        $config["validation"] = TRUE;

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $this->email->from($email, $sender);
        $this->email->to('kiendolorfo@gmail.com');
        $this->email->subject('Testing Email for Vitruv Website Upcoming');
        $this->email->message($message);

        if ($this->email->send()) {
            
            redirect('home','refresh');
            
        } else {
            
            redirect('404_override','refresh');
            
        }
        
	}
}