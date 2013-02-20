<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<title>home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #0CA3D5;
	margin-right: 0px;
}
body,td,th {
	color: #000;
	font-size: 24px;
}
#container{
	margin:auto;
	border-spacing:0;
	padding:0;
}

-->
</style>
<script type="text/javascript">
function panggil(){
	alert("nama :"+document.getElementById("nama").value+"\n"+document.getElementById("pass").value);
}
</script>
<link href="../login/login.php.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (Untitled-2.psd) -->
<table id="container" width="100%" height="942" >
	<tr>
	  <td colspan=100% bgcolor="#f3c407" align="center"><img src="images/Untitled-2_01.gif" width=976 height=250 alt=""></td>
  <tr>
	<td width="250" rowspan="4">&nbsp;</td>
		<td width="20" rowspan="5" bgcolor="#000000">&nbsp;</td>
<td width="587" height="159">
      
      
        </td>
		<td width="20" rowspan="5" bgcolor="#000000">&nbsp;</td>
		<td width="206" rowspan="4">&nbsp;</td>
		<td width="10">
        
  </tr>
	<tr>
		<td width="333" height="20" bgcolor="#000000"></td>
		<td>
			<img src="images/spacer.gif" width="1" height="14" alt=""></td>
  </tr>
	<tr>
		<td align="center" valign="middle" bgcolor="#FFCC00">
<img src="images/edit.png" width="59" height="78">
<form method="post" action="login.php" >
        <table>
        <tr>
        	<td>Username</td><td>:</td><td><input id="nama" name="nama" type="text" size="30" maxlength="50"></td>
        </tr>
        <tr>
        	<td>Password</td><td>:</td><td><input id="pass" name="pass" type="password" size="30" maxlength="30"></td>
        </tr>
        <tr>
        	<td></td><td></td><td  align="left"><input name="LOGIN" type="submit" value="Login"></td>
        </tr>
        <tr>
        	<td colspan="3" align="center"><?php if(isset($_REQUEST['alert'])) echo $_REQUEST['alert'];  ?></td>
        </tr>
        
      
        </table>
        </form>
      </td>
		<td>
			<img src="images/spacer.gif" width="1" height="452" alt=""></td>
  </tr>
	<tr>
		<td rowspan="2">&copy;KUMALA ADI PRAMONO</td>
		<td>
			<img src="images/spacer.gif" width="1" height="2" alt=""></td>
</tr>

<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>
		
</table>
<!-- End Save for Web Slices -->
</body>
</html>