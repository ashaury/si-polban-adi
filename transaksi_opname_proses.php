<?php
include("lib.php");

$nodok=$_POST['nodok'];
$tg_msk=$_POST['tg_msk'];
$brg=$_POST['barang'];
$loka=$_POST['lokasi'];
$kd_pers=$_POST['kd_pers'];
$hrg=$_POST['harga'];
$qt=$_POST['kuant'];
$tg_buku=$_POST['tg_buku'];
$ket=$_POST['ket'];
$link=koneksi_db();
mysql_select_db("dbsedia10",$link);

$query="
INSERT INTO t_opsik 
VALUES (
'', '$loka', '$brg', '$tg_buku', '$tg_msk', '$nodok', '', '$qt', '$hrg', '$ket', ''
)
";
$res=mysql_query($query,$link);
if($res){
	header("location:Opname.php?a=berhasil");
}
else
{
	header("location:Opname.php?a=eror+database");
}
