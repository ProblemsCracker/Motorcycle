<?php
class Cart extends CI_Model{
	function __construct(){
		parent ::__construct();
		$this->load->database();
	}
	function Add_cart($productID, $productQuantity, $productPrice)
	{
		$totalPrice=$productPrice*$productQuantity;
		$customerID=$this->session->userdata('customerID');
		$query1=$this->db->query("SELECT * FROM cart WHERE productID='".$productID."' and customerID=".$customerID);
		$res1=$query1->result_array();
		if(!isset($res1[0]))
			$query2=$this->db->query("INSERT INTO cart(customerID,productID,productQuantity,totalPrice) values(".$customerID.",".$productID.",".$productQuantity.",".$totalPrice.")");
		else
		{
			$qty=$productQuantity+$res1[0]['productQuantity'];
			$price=$totalPrice+$res1[0]['totalPrice'];
			$query3=$this->db->query("UPDATE cart SET productQuantity=".$qty.", totalPrice=".$price." WHERE productID='".$productID."' and customerID=".$customerID);
		}
	}
	
	function My_cart()
	{
		$username=$this->session->userdata('username');
		$query=$this->db->query("SELECT * FROM cart,product,productCategory where cart.customerID = (SELECT customerID FROM customer WHERE customer.username='".$username."') and product.productID=cart.productID and product.productCategoryID=productCategory.productCategoryID");
		return $query->result_array();
	}
	function Delete_product($productID)
	{
		$customerID=$this->session->userdata('customerID');
		$query=$this->db->query("delete from cart where customerID='$customerID' and productID='$productID'");
		if($query)
			return 1;
		else
			return 0;
	}
	function Product_in_cart($productID)
	{
		$username=$this->session->userdata('username');
		$query=$this->db->query("SELECT * FROM cart,product,productCategory where cart.customerID = (SELECT customerID FROM customer WHERE customer.username='".$username."') and product.productID=cart.productID and product.productCategoryID=productCategory.productCategoryID and cart.productID=".$productID);
		return $query->result_array();
	}
	function Edit_cart($productID, $productQuantity, $productPrice)
	{
		$price=$productQuantity*$productPrice;
		$query=$this->db->query("UPDATE cart SET productQuantity=".$productQuantity.", totalPrice=".$price." WHERE productID='".$productID."'");
		if($query)
			return 1;
		else
			return 0;
	}
	function Store_order($customerID, $shippingAddress, $shippingZipcode, $cardNumber, $pin, $billingAddress, $billingZipcode, $orderDate, $sum)
	{
		$query=$this->db->query("INSERT INTO orders(customerID, shippingAddress, shippingZipcode, cardNumber, pin, billingAddress, billingZipcode, orderDate) VALUES(".$customerID.",'".$shippingAddress."','".$shippingZipcode."','".$cardNumber."','".$pin."','".$billingAddress."','".$billingZipcode."','".$orderDate."')");
		$query2=$this->db->query("SELECT MAX(orderID) as maxOrderID FROM orders");
		$res2=$query2->result_array();
		$maxOrderID=$res2[0]['maxOrderID'];
		$query3=$this->db->query("SELECT customerID, productID, totalPrice, productQuantity from cart where cart.customerID='".$customerID."'");
		$res3=$query3->result_array();
		foreach($res3 as $item)
		{
			$query4=$this->db->query("INSERT INTO paid(customerID, productID, productQuantity, totalPrice, orderID) VALUES (".$item['customerID'].",".$item['productID'].",".$item['productQuantity'].",".$item['totalPrice'].",".$maxOrderID.")");
		}
		$query5=$this->db->query("DELETE FROM cart WHERE customerID='".$customerID."'");
		if($query && $query2 && $query3 && $query4 && $query5)
			return 1;
		return 0;
	}
	function My_order()
	{
		$customerID=$this->session->userdata('customerID');
		$query=$this->db->query("SELECT * FROM paid,product,orders,productCategory where paid.customerID='".$customerID."' and paid.productID=product.productID and product.productCategoryID=productCategory.productCategoryID and paid.orderID=orders.orderID order by paid.orderID DESC");
		return $query->result_array();
	}
	function My_order_detail($paidID)
	{
		$query=$this->db->query("SELECT * FROM orders,paid,product where paid.productID=product.productID and orders.orderID=paid.orderID and paid.paidID='".$paidID."'");
		return $query->result_array();
	}
	function Most_popular($productID)
	{
		$customerID=$this->session->userdata('customerID');
		$query=$this->db->query("select * from product where productID=(select productID from paid where customerID<>".$customerID." and productID<>".$productID." group by productID order by sum(productQuantity) desc limit 1)");
		return $query->result_array();
	}
	function Like_most($productID)
	{
		$customerID=$this->session->userdata('customerID');
		$query=$this->db->query("select * from product where productID=(SELECT productID FROM paid where productID<>".$productID." and customerID<>".$customerID." and customerID IN (SELECT customerID FROM paid WHERE productID=".$productID.") group by customerID order by count(*) DESC LIMIT 1)");
		return $query->result_array();
	}
}