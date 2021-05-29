<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
            
            $data['title']  = "WELCOME TO HOME  !";
            $data['subview']  = "main/home_view";
            $this->load->view('index',$data);
            
	}
}
