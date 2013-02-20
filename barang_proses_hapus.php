<?php
include("lib.php");

$id=$_REQUEST['y'];
$link=koneksi_db();
mysql_select_db("dbsedia10",$link);

$query="DELETE FROM t_brg WHERE kd_brg='$id'";
$res=mysql_query($query,$link);
if($res){
	header("location:input_barang.php?a=berhasil");
}
else
{
	header("location:input_barang.php??a=eror+database");
}