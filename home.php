<?php
session_start();
if($_SESSION['login']){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Admin</title>
<style type="text/css">
<!--
body {
	background-color: #FFF;
}
-->
</style></head>

<body background="file:///C|/xampp/htdocs/si-polban/images/background1.gif" >

<tr bgcolor="#0099FF">
	<table width="100%" height="30%" align="center">
	<td bordercolor="#000000" width="100%" height="10%" align="center" bgcolor="#FFCC00" style="font-stretch:normal; font-size:36px; border:medium">Sistem Persedian Politeknik Negeri Bandung</td>
</table></tr>
<p>&nbsp;</p>
<table width="94%" height="270" border="1" align="center" style="border:medium; border-bottom-color:#000">
  <tr align="center">
    <td height="219" bgcolor="#0099FF" align="center"><table width="44%" border="1" bordercolor="#000000"
    >
      <tr>
        <td align="center" bgcolor="#FFCC00" bordercolor="#000000" style="border-width:2">Administrator</td>
      </tr>
    </table>
      <p>&nbsp;</p>
      <table width="21%" height="83" align="center" style="border:medium">
      <tr>
        <td align="left" width="20%" height="77">		
        <form id="form1" name="form1" method="post" action="">
            <?php if($_SESSION['user']=="supa"){ ?><input onclick="window.location.href='Input_data_user.php'" type="button" name="button2" id="button2" value="Setup User" style=" width:100%" /><?php } ?>
            <input onclick="window.location.href='input_barang.php'" type="button" name="button" id="button" value="Tabel Barang" style=" width:100%" />
            <?php
			if(($_SESSION['user']=="juru")||($_SESSION['user']=="rekta")){
			?> 
            <input onclick="window.location.href='Home_Persediaan_masuk.html'" type="button"  value="Persediaan masuk" style=" width:100%" />
            <input onclick="window.location.href='Home_Persediaan_keluar.html'" type="button" value="Persediaan Keluar" style=" width:100%" />
            <?php
            if($_SESSION['user']=="juru"){
			?>
            <input onclick="window.location.href='Laporan_jurusan.php'" type="button"  value="laporan" style=" width:100%" />
            <?php
			}
			if($_SESSION['user']=="rekta"){	
			?>
            <input onclick="window.location.href='Laporan_pusat.php'" type="button"  value="laporan" style=" width:100%" />
            <?php
			}
			?>
			<?php
			}
			?>
            
            <input onclick="window.location.href='logout.php'" type="button" name="exit" value="Keluar" style=" width:100%" />
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
}
else
header("location:index.php");
?>