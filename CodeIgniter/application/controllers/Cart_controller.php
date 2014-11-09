<?php
session_start();
class Cart_controller extends CI_Controller{
	function __construct(){
		parent ::__construct();
		$this->load->model('Cart');
		$this->load->model('Main');
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->view('Site_header');
	}
	function add($productID, $productQuantity, $productPrice)
	{
		$this->Cart->Add_cart($productID, $productQuantity, $productPrice);
		$data['productID']=$productID;
		$this->load->view('Success_add_cart',$data);
	}
	function myCart()
	{
		$this->load->view('Header');
		$res=$this->Cart->My_cart();
		$this->load->view('Cart_table_header');
		$this->session->set_userdata('sum', '0');
		foreach($res as $item)
		{
				$this->load->view('Cart_table',$item);
		}
		$this->load->view('Cart_table_feet');
		$this->load->view('Site_feet');
	}
	function delete($productID)
	{
		if($this->Cart->Delete_product($productID));	
			$this->load->view('Back_to_cart');
	}
	function edit($productID)
	{
		$this->load->view('Header');
		$res=$this->Cart->Product_in_cart($productID);
		$this->load->view('Edit_my_cart',$res[0]);
	}
	function storeEdit($productID, $productQuantity, $productPrice)
	{
		$result=$this->Cart->Edit_cart($productID, $productQuantity, $productPrice);	
		if($result)
			$this->load->view('Success_edit_cart');
	}
	function checkOut()
	{
		$this->load->view('Check_out');	
		$this->load->view('Site_feet');
	}
	function checkOut2()
	{
		$this->load->view('Check_out2');	
		$this->load->view('Site_feet');
	}
	function checkOut3()
	{
		$this->load->view('Check_out3');	
	}
	
	function storeCheckOut()
	{
		
		/*$customerID=$this->session->userdata('customerID');
		$fullName=$this->input->post('sFullName');
		$addressLine1=$this->input->post('sAddressLine1');
		$addressLine2=$this->input->post('sAddressLine2');
		$city=$this->input->post('sCity');
		$state=$this->input->post('sState');
		$zipcode=$this->input->post('sZipcode');
		$country=$this->input->post('sCountry');
		$pin=$this->input->post('pin');
		$billingAddress=$this->input->post('billingAddress');
		$billingZipcode=$this->input->post('billingZipcode');
		$orderDate=date("Y-m-d H:i:s");
		$sum=$this->session->userdata('sum');
		$result=$this->Cart->Store_order($customerID, $shippingAddress, $shippingZipcode, $cardNumber, $pin, $billingAddress, $billingZipcode, $orderDate, $sum);
		if($result)*/
			$this->load->view('Success_checkout');
	}
	function checkoutSuccess(){
		$this->load->view('Header');
		$res=$this->Cart->My_order();
		
		
		$this->load->view('checkOutSuccess');

		$this->load->view('Site_feet');

	}
	function myOrder()
	{
		$this->load->view('Header');
		$res=$this->Cart->My_order();
		$this->load->view('Order_table_header');
		foreach($res as $item)
		{
				$this->load->view('Order_table',$item);
		}
		
		$this->load->view('Order_table_feet');
		$this->load->view('Site_feet');
	}
	function index()
	{
		echo "Cart.index";	
	}
	function orderDetail($paidID)
	{
		$this->load->view('Header');
		$res=$this->Cart->My_order_detail($paidID);
		$this->load->view('Order_detail',$res[0]);
	}
	function recommand($productID)
	{
		$this->load->view('Header');
		$this->load->view('Recommand_header');
		
		$res=$this->Cart->Like_most($productID);
		$res2=$this->Main->special($res[0]['productID']);
		if(isset($res2[0]))
			{$res[0]['specialPrice']=$res2[0]['specialPrice'];}
		$this->load->view('Recommand_like',$res[0]);

		
		$this->load->view('Recommand_feet');
		$this->load->view('Site_feet');
	}
}