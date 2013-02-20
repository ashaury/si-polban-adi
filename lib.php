<?php

function koneksi_db(){
		$is_localhost=true; // Isi dgn true jika untuk server localhost
							// Isi dengan false jika untuk server 000webhost.com
		
		if($is_localhost){
			$host = "localhost";
			$database = "dbsedia10";
			$user = "root";
			$password = "";
		}
		else{
			$host = "mysql4.000webhost.com"; //sesuaikan dengan setingan db kamu
			$database = "a8844496_eorder";
			$user = "a8844496_atoler";
			$password = "at0ler";
		}
		$link=mysql_connect($host,$user,$password);
		mysql_select_db($database,$link);
		if(!$link)
			echo "Error : ".mysql_error();
		return $link;
	}

?>