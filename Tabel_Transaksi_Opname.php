<?php
include("lib.php");
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
    	<td width="100%" height="72" align="center" bgcolor="#FFCC00" style="font-size-adjust:inherit; font-size:36px; font:bold"  >Tabel Transaksi Persediaan Opname</td>
  </tr>
    </table>

<p>&nbsp;</p>
<form action="transaksi_opname_proses.php" method="post">
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
          <select name="barang">
                <option value="" selected="selected" >---Pilih Barang---</option>
                <?php
				$link=koneksi_db();
				$sqlbrg="select * from t_brg group by kd_brg";
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
          <td  align="left"><input name="kd_pers" type="text" size="30" maxlength="30" /></td>
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
                <input onclick="javascript:back()" type="button" value="batal" /></td>
        </tr>
</table>
</form>
      </td>
<!--      
      <table width="98%" border="1" align="center">
        <tr bgcolor="#000000">
          <th height="584" bgcolor="#000000" scope="col"><table width="102%" border="0.5" align="center" bordercolor="#000000">
            <tr>
              <th bgcolor="#FFCC00" scope="col">Kode Barang</th>
              <th bgcolor="#FFCC00" scope="col">Satuan</th>
              <th bgcolor="#FFCC00" scope="col">Nama barang</th>
              <th bgcolor="#FFCC00" scope="col">Keterangan</th>
              <th bgcolor="#FFCC00" scope="col">Jumlah</th>
            </tr>
            <tr>
            	
              <td bgcolor="#FFFFFF" scope="row">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
          </table>
            <p>&nbsp;</p>
            <form id="form1" name="form1" method="post" action="">
              <label>
                <input type="submit" name="button" id="button" value="tambah" />&emsp;
              </label>
              <label>
                <input type="submit" name="button2" id="button2" value="hapus" />
              </label>
              <label>
                  &emsp;  
                <input type="submit" name="button3" id="button3" value="batal" />
                &emsp; 
                <input type="submit" name="button4" id="button4" value="selesai" />
              </label>
            </form>
          <p>&nbsp;</p></th>
      </tr>
</table>
//-->
    <p>&nbsp;</p>
    <tr>
<script type="text/javascript" src="kode/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="kode/cal.js"></script>
<script type="text/javascript">
jQuery(document).ready(function () {
	$('input.tg_buku').simpleDatepicker({ startdate: 1945});
	$('input.tg_msk').simpleDatepicker({ startdate: 1945});
});
</script>
</body>
</html>
