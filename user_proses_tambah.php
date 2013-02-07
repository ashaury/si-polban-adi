<?php


//include("lib.php");
/*
$nama=$_POST["nama"];
$pass=$_POST["pass"];

*/
$host="localhost";
$user="root";
$password="";
/*
$login=false;
*/
$nama=$_POST["nama"];
$jaba=$_POST["jabatan"];
$username=$_POST["user"];
$pass=$_POST["pass"];

if(($nama=='')||($jaba=='')||($user=='')||($pass=='')){
	header("location:Input_data_user.php?a=tidak+boleh+ada+yang+kosong");
}
else{
$link=mysql_connect($host,$user,$password);
mysql_select_db("dbsedia10",$link);

$query="insert into login values('000','$nama','$username','$pass','$jaba','0')";
$res=mysql_query($query,$link);
if($res){
	header("location:Input_data_user.php?a=berhasil");
}
else
{
	header("location:Input_data_user.php?a=eror+database");
}
}
