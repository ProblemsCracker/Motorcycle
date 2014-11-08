<?php
session_start();
class Main_page extends CI_Controller{
	function __construct(){
		parent ::__construct();
		$this->load->model('Main');
		$this->load->model('User');
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('ftp');
		$this->load->view('Site_header');
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
		//$this->load->view('Search');
		foreach($res1 as $category)
		{
			$this->load->view('Product_category_display',$category);
			$res2=$this->Main->product($category['productCategoryID']);
			foreach ($res2 as $item)
			{
					$res3=$this->Main->special($item['productID']);
					if(isset($res3[0]))
						$this->load->view('Product_display1',$res3[0]);
					else
						$this->load->view('Product_display2',$item);
			}
			$this->load->view('Format_adjust1');
		}
		$this->load->view('Site_feet');
	}
	function info($productID)
	{
		$this->load->view('Header');
		$res1=$this->Main->productInfo($productID);
		if(isset($res1[0]))
		{
					$res3=$this->Main->special($res1[0]['productID']);
					if(isset($res3[0]))
						$this->load->view('Product_display3',$res3[0]);
					else
						$this->load->view('Product_display3',$res1[0]);
			}
		$this->load->view('Format_adjust1');
		$this->load->view('Site_feet');
	}
	function login()
	{
			$this->load->view('Header');
			$this->load->view('Login');
			$this->load->view('Site_feet');
	}
	function logout()
	{
			$this->load->view('Logout');	
	}
	function profile($username)
	{
			$this->load->view('Header');
			$res=$this->User->profile($username);
			$this->load->view('Profile',$res[0]);	
			$this->load->view('Site_feet');
	}
	function store_profile()
	{
			$this->session->set_userdata('username', $username);
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$firstName=$this->input->post('firstName');
			$lastName=$this->input->post('lastName');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			if(strlen($username)>0)
			{
				$result=$this->User->Save_profile($customerID,$username,$password,$firstName,$lastName,$phone,$email);
				if($result)
				{
					$this->session->set_userdata('username', $username);
					$this->load->view('Success_edit');
				}
				else
					$this->load->view('Error_edit');
			}	
	}
	function register()
	{
		$this->load->view('Header');
		$this->load->view('Register');
		$this->load->view('Site_feet');
	}
	function store_register()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$firstName=$this->input->post('firstName');
		$lastName=$this->input->post('lastName');
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$result=$this->User->Save_register($username,$password,$firstName,$lastName,$phone,$email);
		if($result)
		{
					$this->session->set_userdata('username', $username);
					$this->load->view('Success_edit');
					$res=$this->User->profile($username);
					$this->session->set_userdata('customerID', $res[0]['customerID']);
		}
		else
					$this->load->view('Error_edit');
	}
	function search_product()
	{
		$productName=$this->input->post('productName');
		$res=$this->Main->search($productName);
		$this->load->view('Header');
		$this->load->view('Search_header');
		//$this->load->view('Search');
		if($res!=0)
		{
		foreach ($res as $item)
		{
					$res3=$this->Main->special($item['productID']);
					if(isset($res3[0]))
						$this->load->view('Product_display1',$res3[0]);
					else
						$this->load->view('Product_display2',$item);
		}
		$this->load->view('Format_adjust1');
		$this->load->view('Back');
		$this->load->view('Site_feet');
		}
		else
		{
			$this->load->view('Attack');	
		}
	}
}
?>