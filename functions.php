<?php 

require "includes/config.php";
	

	function querySearch($query){
		global $conn;
		$result = $conn->query($query);
		if(!$result) die ($conn->error);
		return $result;
	}

	function showUser($user) {
		
	}

	function sanitizeString($str) {
		global $conn;
		$str = strip_tags($str);
		$str = htmlentities($str);
		$str = stripslashes($str);
		return $conn->real_escape_string($str);
	}

	function recordSess(){

	}


?>