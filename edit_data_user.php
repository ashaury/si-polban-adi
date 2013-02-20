<?php
session_start();
if($_SESSION['login']){
include("lib.php");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #09F;
}
-->
</style>
</head>

<body>
<table width="100%" border="1">
  <tr bgcolor="#FFCC00">
    <th scope="col">Input Data User</th>
  </tr>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="user_proses_edit.php">
<?php
$id=$_REQUEST['w'];
	$link=koneksi_db();
	$sql="select * from login where nama_id='$id'";
	$res=mysql_query($sql,$link);
	if($res)
	{
		if(mysql_num_rows($res)>0)
		{
			$data=mysql_fetch_array($res);
?>
<input type="hidden" name="id" value="<?php echo $id ?>" />
<table width="60%" height="153" border="1" align="center">
  <tr>
    <th bgcolor="#FFCC00" scope="col"><p>&nbsp;</p>
      <table width="238" align="center">
      <tr>
        <td width="41"><strong>Nama</strong></td>
        <td width="3">:</td>
        <td width="261" bgcolor="#FFFFFF"><input type="text" name="nama" value="<?php echo $data['nama'];?>" /></td>
      </tr>
      <tr>
        <td><strong>Jabatan</strong></td>
        <td>:</td>
        <td bgcolor="#FFFFFF"><input type="text" name="jabatan" value="<?php echo $data['jabatan'];?>" /></td>
      </tr>
      <tr>
        <td><strong>Username</strong></td>
        <td>:</td>
        <td bgcolor="#FFFFFF"><input type="text" name="user" value="<?php echo $data['nama_id'];?>" /></td>
      </tr>
      <tr>
        <td><strong>Password</strong></td>
        <td>:</td>
        <td bgcolor="#FFFFFF"><input type="text" name="pass" value="<?php echo $data['password'];?>" /></td>
      </tr>
    </table>
<?php
		}}
?> 
      <p><?php if(isset($_REQUEST['a']))echo $_REQUEST['a']; ?>&nbsp;  </p>
        <label>
          <input type="submit" name="button" id="button" value="Edit" />
        </label>
        <input onclick="window.location.href='Input_data_user.php'" type="button" value="keluar" />
      </form>
      <p>&nbsp;</p>
    <p></p></th>
  </tr>
</table>

<table width="60%" height="100%" border="1" align="center">
  <tr bgcolor="#000000">
    <th scope="col"><table width="100%" height="100%" border="1">
      <tr>
        <th width="8%" bgcolor="#FFFFFF" scope="col">No</th>
        <th width="23%" bgcolor="#FFFFFF" scope="col">Nama</th>
        <th width="19%" bgcolor="#FFFFFF" scope="col">Jabatan</th>
        <th width="22%" bgcolor="#FFFFFF" scope="col">Username</th>
        <th width="28%" bgcolor="#FFFFFF" scope="col">Password</th>
      </tr>

<?php
$host="localhost";
$user="root";
$password="";
$link=mysql_connect($host,$user,$password);
mysql_select_db("dbsedia10",$link);
$i=1;
$query="select * from login";
$res=mysql_query($query,$link);
if($res){
while($data=mysql_fetch_array($res)){
?>
      <tr>
        <td bgcolor="#FFFFFF" scope="row"><?php echo $i; $i++; ?></td>
        <td bgcolor="#FFFFFF" scope="row"><?php echo $data['nama']; ?></td>
        <td bgcolor="#FFFFFF" scope="row"><?php echo $data['jabatan']; ?></td>
        <td bgcolor="#FFFFFF" scope="row"><?php echo $data['nama_id']; ?></td>
        <td bgcolor="#FFFFFF"><?php echo $data['password']; ?></td>
        <td><a href="edit_data_user.php?w=<?php echo $data['nama_id']; ?>">edit</a></td>
        <td><a href="user_proses_hapus.php?id=<?php echo $data['nama_id']; ?>">hapus</a></td>
      </tr>
<?php
}
}
?>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
}
else
header("location:index.php");

?>