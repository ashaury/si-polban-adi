<?php
include("lib.php");

$nama=$_POST["nama"];
$jaba=$_POST["jabatan"];
$username=$_POST["user"];
$pass=$_POST["pass"];
$id=$_POST['id'];

if(($nama=='')||($jaba=='')||($username=='')||($pass=='')){
	header("location:Input_data_user.php?a=tidak+boleh+ada+yang+kosong");
}
else{
$link=koneksi_db();
mysql_select_db("dbsedia10",$link);
$query="UPDATE login SET nama = '$nama',nama_id = '$username',password= '$pass',jabatan= '$jaba' WHERE nama_id= '$id' LIMIT 1";

$res=mysql_query($query,$link);
if($res){
	header("location:Input_data_user.php?a=berhasil");
}
else
{
	header("location:Input_data_user.php?a=eror+database");
}
}
