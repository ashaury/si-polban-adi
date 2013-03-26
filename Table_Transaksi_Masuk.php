<?php
include("lib.php");
if(isset($_GET['brg']))
$id=$_GET['brg'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>proses transaksi</title>
<style type="text/css">
<!--
body {
	background-color: #09F;
}
.datepicker { border-collapse: collapse; border: 2px solid #999; position: absolute; z-index:9999; }
.datepicker tr.controls th { height: 22px; font-size: 11px; }
.datepicker select { font-size: 11px; }
.datepicker tr.days th { height: 18px; }
.datepicker tfoot td { height: 18px; text-align: center; text-transform: capitalize; }
.datepicker th, .datepicker tfoot td { background: #eee; font: 10px/18px Verdana, Arial, Helvetica, sans-serif; }
.datepicker th span, .datepicker tfoot td span { font-weight: bold; }

.datepicker tbody td { width: 24px; height: 24px; border: 1px solid #ccc; font: 11px/22px Arial, Helvetica, sans-serif; text-align: center; background: #fff; }
.datepicker tbody td.date { cursor: pointer; }
.datepicker tbody td.date.over { background-color: #99ffff; }
.datepicker tbody td.date.chosen { font-weight: bold; background-color: #ccffcc; }
-->
</style></head>

<body>
<table width="830" height="78">
    <tr> 
    	<td width="100%" height="72" align="center" bgcolor="#FFCC00" style="font-size-adjust:inherit; font-size:36px; font:bold"  >Tabel Transaksi Persediaan Masuk</td>
  </tr>
    </table>

<p>&nbsp;</p>
<form action="transaksi_masuk_proses.php" method="post">
<table>
        <tr>
        	<td bgcolor="#FFCC00" bordercolor="#333333">Nomor dokumen </td> <td>:</td><td><input name="nodok" type="text" size="30" maxlength="50"align="left"></td>
  </tr>
        <tr>
        	<td bgcolor="#FFCC00">Tanggal </td><td>:</td>
        	<td><input class="tg_msk" name="tg_msk" type="text" size="30" maxlength="30" />
<!--            <form id="form2" name="form2" method="post" action="">
        	  <label>
        	    <select name="hari" id="hari">
      	      </select>&emsp; &nbsp;
      	    </label>
      	      <label>
      	        <select name="bulan" id="bulan">
   	            </select>&emsp; &nbsp;
      	      </label>
      	      <label>
      	        <select name="tahun" id="tahun" spry:setrownumber="4">
   	            </select>
   	          </label>
            </form>
//-->            </td>
        </tr>
         <tr>
        <td bgcolor="#FFCC00">Barang</td>
          <td>:</td>
          <td  align="left">
          <select name="barang" id="barang" onchange="gen_kd_pers()">
                <option value="" selected="selected" >---Pilih Barang---</option>
                <?php
				$link=koneksi_db();
				$sqlbrg="select * from t_brg group by kd_brg order by ur_brg";
				$resbrg=mysql_query($sqlbrg,$link);
				if($resbrg){
					while($brg=mysql_fetch_array($resbrg)){
                	echo"
					<option value=".$brg['kd_brg'].">".$brg['ur_brg']."</option>
					";
					}
				}
				?>
				</select>
          </td></tr>
        <tr>
        <td bgcolor="#FFCC00">Lokasi</td>
          <td>:</td>
          <td  align="left">
          <select name="lokasi">
                <option value="" selected="selected" >---Pilih Lokasi---</option>
                <?php
				$link=koneksi_db();
				$sqlkate="select * from t_upb";
				$reskate=mysql_query($sqlkate,$link);
				if($reskate){
					while($kate=mysql_fetch_array($reskate)){
                	echo"
					<option value=".$kate['kd_lokasi'].">".$kate['ur_upb']."</option>
					";
					}
				}
				?>
				</select>
          </td></tr>
        <tr>
          <td bgcolor="#FFCC00">Kode persedian</td>
          <td>:</td>
          <td  align="left"><input name="kd_pers" id="pers" type="text" size="30" maxlength="30" readonly="readonly" /></td>
        </tr>
        <tr>
          <td bgcolor="#FFCC00">Harga satuan</td>
          <td>:</td>
          <td  align="left"><input name="harga" type="text" size="30" maxlength="30" /></td>
        </tr>
        <tr>
          <td bgcolor="#FFCC00">Jumlah Masuk</td>
          <td>:</td>
          <td  align="left"><input name="kuant" type="text" size="30" maxlength="30" /></td>
        </tr>
        <tr>
          <td bgcolor="#FFCC00">Tgl Buku</td>
          <td>:</td>
          <td  align="left"><input class="tg_buku" name="tg_buku" type="text" size="30" maxlength="30" /></td>
        </tr>
        <tr>
          <td bgcolor="#FFCC00">Keterangan</td>
          <td>:</td>
          <td  align="left"><input name="ket" type="text" size="30"  /></td>
        </tr>        
        <tr>
          <td ></td>
          <td></td>
          <td  align="left"><input type="submit" name="button" id="button" value="tambah" />&emsp;  
                <input onclick="window.location.href='Persedian_Masuk.php'" type="button" value="batal" /></td>
        </tr>
</table>
</form>


<div id="tabel-pers">   
   <table width="102%" border="0.5" align="center" bordercolor="#000000">
            <tr>
              <th bgcolor="#FFCC00" scope="col">Kode Barang</th>
              <th bgcolor="#FFCC00" scope="col">Nama barang</th>
              <th bgcolor="#FFCC00" scope="col">Jumlah</th>
            </tr>
<?php
				$link=koneksi_db();
				$sqlm="select kd_brg,ur_brg,sum(kuantitas)jumlah from (select s.kd_brg,b.ur_brg ,s.kuantitas,s.tgldok from t_sediam s,t_brg b where b.kd_brg=s.kd_brg group by s.kd_brg,s.tgldok ) g_sedia where kd_brg='$id' group by kd_brg order by tgldok desc";
				$resm=mysql_query($sqlm,$link);
				if($resm){
					$pros=mysql_fetch_array($resm);
					$m=$pros['jumlah'];
				}
				$sqlk="select kd_brg,ur_brg,sum(kuantitas)jumlah from (select s.kd_brg,b.ur_brg ,s.kuantitas,s.tgldok from t_sediak s,t_brg b where b.kd_brg=s.kd_brg group by s.kd_brg,s.tgldok ) g_sedia where kd_brg='$id' group by kd_brg order by tgldok desc";
				$resk=mysql_query($sqlk,$link);
				if($resk){
					$k=mysql_fetch_array($resk);
					$kp=$k['jumlah'];
					}																			
?>
            <tr>
            	
              <td bgcolor="#FFFFFF" scope="row"><?php echo $pros['kd_brg']  ; ?></td>
              <td bgcolor="#FFFFFF"><?php echo $pros['ur_brg']  ; ?></td>
              <td bgcolor="#FFFFFF"><?php echo $m.'-'.$k.'='.$m-$kp  ; ?></td>
            </tr>		
          </table>
</div>
<script type="text/javascript" src="kode/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="kode/cal.js"></script>
<script type="text/javascript">
jQuery(document).ready(function () {
	$('input.tg_buku').simpleDatepicker({ startdate: 1945});
	$('input.tg_msk').simpleDatepicker({ startdate: 1945});
});

function gen_kd_pers(){
var brg=document.getElementById("barang").value
document.getElementById("pers").value=brg;

get_saldo(brg);
}

function get_saldo(str)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("tabel-pers").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","saldo_barang.php?brg="+str,true);
xmlhttp.send();
}
</script>
</body>
</html>
