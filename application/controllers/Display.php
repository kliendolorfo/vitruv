<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display extends CI_Controller {

	public function index()
	{
    $this->load->view('include/header');
    $this->load->view('include/nav');
    $this->load->view('promotional/index');
    $this->load->view('include/footer');
    $this->load->view('include/script');
  }

  public function error()
  {
    $this->load->view('errors/error_php');
  }
  
  public function about()
  {
    $this->load->view('include/header');
    $this->load->view('include/nav');
    $this->load->view('promotional/about');
    $this->load->view('include/footer');
    $this->load->view('include/script');
  }

  public function team()
  {
    $this->load->view('include/header');
    $this->load->view('include/nav');
    $this->load->view('promotional/team');
    $this->load->view('include/footer');
    $this->load->view('include/script');
  }

  public function service()
  {
    $this->load->view('include/header');
    $this->load->view('include/nav');
    $this->load->view('promotional/pricing');
    $this->load->view('include/footer');
    $this->load->view('include/script');
  }

  public function work()
  {
    $this->load->view('include/header');
    $this->load->view('include/nav');
    $this->load->view('promotional/work');
    $this->load->view('include/footer');
    $this->load->view('include/script');
  }

  public function client()
  {
    $this->load->view('include/header');
    $this->load->view('include/nav');
    $this->load->view('promotional/client');
    $this->load->view('include/footer');
    $this->load->view('include/script');
  }

  public function pricing()
  {
    $this->load->view('include/header');
    $this->load->view('include/nav');
    $this->load->view('promotional/pricing');
    $this->load->view('include/footer');
    $this->load->view('include/script');
  }

  public function contact()
  {
    $this->load->view('include/header');
    $this->load->view('include/nav');
    $this->load->view('promotional/contact');
    $this->load->view('include/footer');
    $this->load->view('include/script');
  }
}
