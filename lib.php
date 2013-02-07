<?php

function link(){

$host="localhost";
$user="root";
$password="";


$link=mysql_connect($host,$user,$password);
mysql_select_db("dbsedia10",$link);

//return $link;
}

?>