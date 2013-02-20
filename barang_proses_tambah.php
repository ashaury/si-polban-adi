<?php
include("lib.php");


$kd=$_POST["kode"];
$sat=$_POST["satuan"];
$kete=$_POST["ket"];


$link=koneksi_db();
mysql_select_db("dbsedia10",$link);

$query="insert into t_brg values('$kd','$kete','','','','$sat','')";
$res=mysql_query($query,$link);
if($res){
	header("location:input_barang.php?a=berhasil");
}
else
{
	header("location:input_barang.php??a=eror+database");
}
