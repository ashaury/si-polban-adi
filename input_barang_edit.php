<?php
session_start();
if($_SESSION['login']){
include("lib.php");	
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
        <td align="center" bgcolor="#FFCC00" bordercolor="#000000" style="border-width:2; font-size:16px; font:bold">Edit Tabel Barang</td>
      </tr>
    </table>
      <p>&nbsp;</p>
      <form name="form_brg" action="barang_proses_edit.php" method="post">
      <?php
$id=$_REQUEST['y'];
	$link=koneksi_db();
	$sql="select * from t_brg where kd_brg='$id'";
	$res=mysql_query($sql,$link);
	if($res)
	{
		if(mysql_num_rows($res)>0)
		{
			$data=mysql_fetch_array($res);
?>
<input type="hidden" name="id" value="<?php echo $id ?>" />
      <table border="0.2" bordercolor="#000000">
               <tr>
          <th  scope="row">Kode Barang</th>
          <td >:</td>
          <td ><input type="text" name="kode" value="<?php echo $data['kd_brg'];?>" /></td>
        </tr>
                <tr>
          <th  scope="row">Satuan Barang</th>
          <td >:</td>
          <td ><input type="text" name="satuan" value="<?php echo $data['satuan'];?>" /></td>
        </tr>
        <tr>
          <th  scope="row">Uraian Barang</th>
          <td >:</td>
          <td ><textarea name="ket"><?php echo $data['ur_brg'];?></textarea></td>
        </tr>
      </table>  
<?php
		}}
?>
      <p>&nbsp;</p>

        <label>
          <input type="submit" name="button2" id="button2" value="Edit" />&emsp;
        </label>
        &emsp;
        <input onclick="javascript:back()"  type="button" name="button5" id="button5" value="keluar" />
      </form>

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