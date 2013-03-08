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
INSERT INTO t_sediam
VALUES (
'$loka', '', '', '$nodok', '$tg_msk', '$tg_buku', '$brg', '$qt', '$ket', '', '', '', '$hrg', '', ''
);
";
$res=mysql_query($query,$link);
if($res){
	header("location:Table_Transaksi_Masuk.php?brg=$brg");
}
else
{
	header("location:Table_Transaksi_Masuk.php?brg=eror+database");
}
