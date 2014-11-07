<?php
session_start();
class Opache extends CI_Controller{
	function __construct(){
		parent ::__construct();
		$this->load->model('Main');
		$this->load->model('User');
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('ftp');

		
	}
	function index(){
		$res4=1;
		$res1=$this->Main->category();
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		if(strlen($username)>0 && strlen($password)>0)
		{
			$res4=$this->User->login($username,$password);
			if($res4==0)
				$this->load->view('Attack');
			else
			{
				if(!isset($res4[0]))
					$this->load->view('Error_log');
				else
					$this->load->view('Success_log',$res4[0]);
			}
		}
		elseif(strlen($username)>0 || strlen($password)>0)
		$this->load->view('Error_log');
			
		$this->load->view('Header');
		$this->load->view('opache');

	}
	
}
?>