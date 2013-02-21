<?php
include("lib.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Buku Persediaan</title>
<style type="text/css">
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
.datepicker tbody td.date.chosen { font-weight: bold; background-color: #ccffcc;
}
</style>
</head>

<body>\
<table>
    <tr >
   	  <td headers="sistem Informasi persedian Barang"> </td>
            
    </tr>
	</table>
<table width="100%" border="1">
	  <tr>
	    <td background="images/page-1_14.gif" height="95" style="font-size:36px; font-style:oblique; text-decoration:underline" align="center">Laporan Persedian Barang</td>
      </tr>
</table>
<p>&nbsp;</p>
<table width="100%" border="1">
  <tr>
    <td width="11%" height="200" bgcolor="#0066CC"><form  method="post" action="laporan_jurusan_cetak.php" target="_blank">
      <label>&emsp;&nbsp;
        <select name="select" id="select" style="width:auto; display:
        run-in">
          <option>Tahunan</option>
          <option>Semester</option>
        </select>
      </label>
    <td width="78%" align="center" bgcolor="#FF9900"><table>
    	<tr>
        	<td colspan="3">Buku Persediaan</td>
        </tr>
            	<tr>
        	<td width="102">Kode Barang</td><td width="3">:</td><td width="313"><select name="barang">
                <option value="" selected="selected" >---Pilih Barang---</option>
                <?php
				$link=koneksi_db();
				$sqlbrg="select * from t_skel";
				$resbrg=mysql_query($sqlbrg,$link);
				if($resbrg){
					while($brg=mysql_fetch_array($resbrg)){
                	echo"
					<option value=".$brg['kd_skelbrg'].">".$brg['ur_skel']."</option>
					";
					}
				}
				?>
				</select></td>
        </tr>
            	<tr>
            	  <td>Tanggal Laporan</td>
            	  <td>:</td>
            	  <td> <input class="tg_awal" name="tg_awal" width="300" align="left"/> sd <input class="tg_akhir" name="tg_akhir" width="300" align="left"/> </td>
          	  </tr>
            	<tr>
<!--        	<td>Nama Barang</td><td>:</td><td><input width="300" Align="left"/></td> //-->
        </tr>
            	<tr>
        	<td></td><td></td><td><input type="submit" value="cetak">&emsp;
<!--        	  <input type="button" name="button" id="button" value="copy ke excel" />&emsp; //-->
        	  <input onclick="window.location.href='home.php'" type="button" name="button2" id="button2" value="keluar" align="middle" />

</form></td>
        </tr>
    </table>
    
    
    
   
</table>
<script type="text/javascript" src="kode/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="kode/cal.js"></script>
<script type="text/javascript">
jQuery(document).ready(function () {
	$('input.tg_awal').simpleDatepicker({ startdate: 1945});
	$('input.tg_akhir').simpleDatepicker({ startdate: 1945});
});
</script>
</body>
</html>
