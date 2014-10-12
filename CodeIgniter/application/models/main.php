<?php
class Main extends CI_Model{
	function __construct(){
		parent ::__construct();
		$this->load->database();
	}
	function product($category){
		$query=$this->db->query('select * from product where productCategoryID='.$category);
		return $query->result_array();
	}
	function category(){
		$query=$this->db->query('select * from productCategory');
		return $query->result_array();
	}
	function special($productID)
	{
		$query=$this->db->query('select * from specialSale,product where product.productID=specialSale.productID and product.productID='.$productID);
		return $query->result_array();
	}
	function productInfo($productID){
		$query=$this->db->query('select * from product where productID='.$productID);
		return $query->result_array();
	}
	function search($productName){
		if(!preg_match("/^([\s\S]*?)(ALTER|CREATE|DELETE|DROP|JAVASCRIPT|SCRIPT|<|>|EXEC(UTE){0,1}|INSERT( +INTO){0,1}|MERGE|SELECT|UPDATE|UNION( +ALL){0,1})(.*)$/",strtoupper($productName)))
		 {
			 $query=$this->db->query("select * from product where productName like '%". $productName."%'");
			return $query->result_array();
		 }
		 return 0;
	}
}