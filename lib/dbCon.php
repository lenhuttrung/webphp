<?php

	function connect(){
		$tenmaychu="localhost";
		$tentaikhoan="root";
		$pass="";
		$csdl="aitiphoto";
		$conn=mysqli_connect("$tenmaychu","$tentaikhoan","$pass","$csdl");
		mysqli_set_charset($conn, 'UTF8');
		return $conn;
	}

?>