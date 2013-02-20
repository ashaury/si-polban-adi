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
$id=$_REQUEST['id'];


$link=mysql_connect($host,$user,$password);
mysql_select_db("dbsedia10",$link);

$query="DELETE FROM login WHERE nama_id='$id' LIMIT 1";
$res=mysql_query($query,$link);
if($res){
	header("location:Input_data_user.php?a=berhasil");
}
else
{
	header("location:Input_data_user.php?a=eror+database");
}
