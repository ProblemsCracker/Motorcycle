<?php
class User extends CI_Model{
	function __construct(){
		parent ::__construct();
		$this->load->database();
	}
	function login($username,$password){
		 if(!preg_match("/^([\s\S]*?)(ALTER|CREATE|DELETE|DROP|JAVASCRIPT|SCRIPT|<|>|EXEC(UTE){0,1}|INSERT( +INTO){0,1}|MERGE|SELECT|UPDATE|UNION( +ALL){0,1})(.*)$/",strtoupper($username)))
		 if(!preg_match("/^([\s\S]*?)(ALTER|CREATE|DELETE|DROP|JAVASCRIPT|SCRIPT|<|>|EXEC(UTE){0,1}|INSERT( +INTO){0,1}|MERGE|SELECT|UPDATE|UNION( +ALL){0,1})(.*)$/",strtoupper($password)))
		 {
			$sql="select * from customer where username=? and password=password(?)";
			$query=$this->db->query($sql, array("$username", "$password"));
			return $query->result_array();
		}
		return 0;
	}
	function profile($username)
	{
		$query=$this->db->query("select * from customer where username='".$username."'");
		return $query->result_array();
	}
	function Save_profile($customerID,$username,$password,$firstName,$lastName,$phone,$email)
	{
		$query=$this->db->query("UPDATE customer SET username='$username', password=password('$password'), firstName='$firstName', lastName='$lastName', phone='$phone', email='$email' WHERE customerID='$customerID'");
		if(!$query)
			return 0;
		else
			return 1;
	}
	function Save_register($username,$password,$firstName,$lastName,$phone,$email)
	{
		$query=$this->db->query("insert into customer(username, password, firstName, lastName, phone, email) values('$username',password('$password'),'$firstName','$lastName','$phone','$email')");
		if(!$query)
			return 0;
		else
			return 1;
	}
}