<?php
//include("lib.php");

$nama=$_POST["nama"];
$pass=$_POST["pass"];


$host="localhost";
$user="root";
$password="";

$login=false;
$link=mysql_connect($host,$user,$password);
mysql_select_db("dbsedia10",$link);

$query="select * from login";
$res=mysql_query($query,$link);
if($res){
while($data=mysql_fetch_array($res)){
if(($nama==$data['nama_id'])&&($pass==$data['password']))
{$login=true;
$tipe=$data['jabatan'];}
}

if($login){

if($tipe=='s'){
header("location:home.html");
}
if($tipe=='o'){
header("location:home_jurusan.html");	
}

echo "login berhasil ".$tipe;


}
else{
header("location:index.php?alert=Login Gagal");
echo "login gagal".$nama." ".$pass;
}

}
else{
echo "koneksi database gagal";
}