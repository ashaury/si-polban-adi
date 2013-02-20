<?php
session_start();
if($_SESSION['login']){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Input barang</title>
<style type="text/css">
<!--
body {
	background-color: #FFF;
}
-->
</style></head>

<body background="images/background1.gif" >

<tr bgcolor="#0099FF">
	<table width="100%" height="30%" align="center">
	<td bordercolor="#000000" width="100%" height="10%" align="center" bgcolor="#FFCC00" style="font-stretch:normal; font-size:36px; border:medium; font:bold">Sistem Persedian Politeknik Negeri Bandung</td>
</table></tr>
<p>&nbsp;</p>
<table width="94%" height="695" border="1" align="center" style="border:medium; border-bottom-color:#000">
  <tr align="center">
    <td height="683" bgcolor="#0099FF" align="center"><p>&nbsp;</p>
      <table width="44%" border="1" bordercolor="#000000"
    >
      <tr>
        <td align="center" bgcolor="#FFCC00" bordercolor="#000000" style="border-width:2; font-size:16px; font:bold">Input tabel barang</td>
      </tr>
    </table>
      <p>&nbsp;</p>
      <table width="70%" border="0.2" bordercolor="#000000">
        <tr>
          <th bgcolor="#FFCC00" scope="col">Kode Barang</th>
          <th bgcolor="#FFCC00" scope="col">Satuan barang</th>
          <th bgcolor="#FFCC00" scope="col">Uraian barang</th>
        </tr>
        
<?php
$host="localhost";
$user="root";
$password="";
$link=mysql_connect($host,$user,$password);
mysql_select_db("dbsedia10",$link);
$query="select * from t_brg order by kd_brg limit 50";
$res=mysql_query($query,$link);
if($res){
while($data=mysql_fetch_array($res)){
?>
        <tr>
          <th bgcolor="#FFFFFF" scope="row"><?php echo $data['kd_brg']; ?></th>
          <td bgcolor="#FFFFFF"><?php echo $data['satuan']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $data['ur_brg']; ?></td>
        </tr>
<?php
}
}
?>
<!--        
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <th bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        //-->
      </table>
      
      <p>&nbsp;</p>
      <form id="form2" name="form2" method="post" action="">
        <label>
          <input type="button" name="button2" id="button2" value="tambah" />&emsp;
        </label>
        <input type="button" name="button3" id="button3" value="Edit" />&emsp;
        <input type="button" name="button4" id="button4" value="hapus" />&emsp;
        <input onclick="window.location.href='home.php'"  type="button" name="button5" id="button5" value="keluar" />
      </form>
      <p>
        <label>
          <input type="button" name="button" id="button" value="search" />
          <input size="70" maxlength="100" />
        </label>
      </p>
<p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
<?php
}
else
header("location:index.php");
?>