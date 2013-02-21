<?php
session_start();
include("lib.php");

$jurid=$_POST['upb'];
$tgf=$_POST['tg_awal'];
$tge=$_POST['tg_akhir'];
$kel=$_POST['barang'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Buku Persediaan</title>

</head>

<body>
<?php
$link=koneksi_db();
$query="
SELECT b.kd_brg,b.ur_brg,sum(m.kuantitas)-sum(k.kuantitas) kuantiti, (sum(m.kuantitas)-sum(k.kuantitas))*avg(m.rph_sat) rupiah 

FROM t_sediak k,t_sediam m,t_brg b

where k.kd_brg=m.kd_brg and m.kd_lokasi='$jurid' and k.kd_lokasi='$jurid' and m.kd_brg=b.kd_brg and m.tglbuku>='$tgf' and m.tglbuku<='$tge'
and substring(b.kd_brg,1,7)='$kel'

group by b.kd_brg";
$res=mysql_query($query,$link);
if($res){
if(mysql_fetch_row($res)>0){?>

<table border="1" cellspacing="0" cellpadding="0" style="text-align:center;" align="center">
  <tr>
  <td colspan="9">LAPORAN BUKU PERSEDIAAN BARANG</td>
  </tr>  
  <tr>
    <td >KODE</td>
    <td >URAIAN</td>
    <td >KUANTITAS</td>
    <td >RUPIAH</td>
  </tr>  
<?php
while($data=mysql_fetch_array($res)){
?>
  
  <tr>
    <td><?php echo $data['kd_brg']; ?></td>
    <td><?php echo $data['ur_brg']; ?></td>
    <td><?php echo $data['kuantiti']; ?></td>
    <td><?php echo $data['rupiah']; ?></td>
  </tr>
<?php
		}
	}
	else
	{
		echo "<center>Data tidak ditemukan</center>";
	}
?>  
</table>
<?php
}
?>
</body>
</html>
