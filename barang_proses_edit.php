<?php
include("lib.php");

$id=$_POST['id'];
$kd=$_POST["kode"];
$sat=$_POST["satuan"];
$kete=$_POST["ket"];


$link=koneksi_db();
mysql_select_db("dbsedia10",$link);

$query="UPDATE t_brg SET kd_brg = '$kd',ur_brg = '$kete',satuan= '$sat' WHERE kd_brg= '$id'";
$res=mysql_query($query,$link);
if($res){
	header("location:input_barang.php?a=berhasil");
}
else
{
	header("location:input_barang.php??a=eror+database");
}
