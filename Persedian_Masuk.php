<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="file:///D|/Adi/TA Bloody Hell/48982_100000651105524_3032_n.jpg" style="background-repeat:repeat; color: #000; si">
<table width="100%" height="28%" style="border:double; border-color:#333" align="center">
<tr>
	<td height="174" bgcolor="#FFCC00" align="center"><p style="font-size:36px;text-decoration:underline; font: Arial, Helvetica, sans-serif">Sistem Informasi Persedian Barang
	  </p>
    
      <p align="left" style="font-size:16px; word-spacing:normal" &ensp;>&nbsp;</p>
      <table width="100%" border="2">
        <tr>
          <th  width="30%">Persedian Masuk</th>
        </tr>
      </table></td>
    

</tr>
</table>
<p>&nbsp;</p>
<table width="100%" border="0.5" align="center" style="background-color:#000; color: #000;" >
  <tr>
    <th width="19%" bgcolor="#0099FF" scope="col">No.Dok</th>
    <th width="20%" bgcolor="#0099FF" scope="col">`No.Bukti</th>
    <th width="13%" bgcolor="#0099FF" scope="col">Tgl.Dok</th>
    <th width="12%" bgcolor="#0099FF" scope="col">Tgl.Buku</th>
    <th width="36%" bgcolor="#0099FF" scope="col">Ket</th>
    <th width="36%" bgcolor="#0099FF" scope="col">Rupiah</th>
  </tr>
   <?php
$host="localhost";
$user="root";
$password="";
$link=mysql_connect($host,$user,$password);
mysql_select_db("dbsedia10",$link);
$i=1;
$query="select * from t_sediam order by tgldok desc limit 50 ";
$res=mysql_query($query,$link);
if($res){
while($data=mysql_fetch_array($res)){
?>
<tr>
    <th bgcolor="#FFFFFF" scope="row"><?php echo $data['nodok']; ?></th>
    <td bgcolor="#FFFFFF"><?php echo $data['nobukti']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $data['tgldok']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $data['tglbuku']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $data['keterangan']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo ($data['rph_sat']*$data['kuantitas']); ?></td>
  </tr>

<?php
}}
?> 
</table>
<table width="100%" height="79" border="1">
  <tr align="left">
    <th bgcolor="#999999" scope="col"></p>
      <form id="form1" name="form1" method="post" action="">
        <label>
          <input name="checkbox" type="checkbox" id="checkbox" value="No.Dok" />
        </label>
      No.Dok 
        <label>
               <input name="checkbox2" type="checkbox" id="checkbox2" value="Tgl.Dok" />
               Tgl.Dok
             </label>
        <table width="48%" align="right" >
               <tr>
                 <td><input onclick="window.location.href='Table_Transaksi_Masuk.php'" name="" type="button" value="Tambah" />
 <!--                <input name="input" type="button" value="Edit" />
                 <input name="input2" type="button" value="Hapus" />
//-->                 
                 <input onclick="window.location.href='Home_Persediaan_masuk.html'" name="input3" type="button" value="Kembali" /></td>
               </tr>
        </table>
      </form>
             
      <table >
        <tr>
          <td>cari</td>
          <td>:</td>
          <td width="300"><input maxlength="50" width="300"/></td>
        </tr>
      </table>
    </p></th>
  </tr>
</table>
<p><td bgcolor="#FFFFFF">&nbsp;</td>
</body>
</html>
