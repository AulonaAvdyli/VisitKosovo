<?php

//connect to db 
 
$conFirst = new dbConnect('localhost','lonaketa','lonaketa','visit_Kosovo');

$conn=$conFirst->conn;


// Object Oriented,ne konstruktor e kemi db lidhjen
class dbConnect{
	public $conn;
	function __construct (string $host,string $username,string $password, string $dbName){

		$this->conn = mysqli_connect($host, $username, $password, $dbName);

		if(!$this->conn){
	    echo 'Connection error: ' . mysqli_connect_error();
		}

	}

	public function mbyllLidhjenDB(){
	  $this->con = null;
	}
	
}




?>

