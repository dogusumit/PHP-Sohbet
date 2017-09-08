<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Sohbet</title>
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<?php
if(isset($_COOKIE["asdqweasdqwe"])){
$kul_ad=$_COOKIE["asdqweasdqwe"];
}
else {
header('Location: index.php');
exit;}
?>
<?php
print('<table align="left"><tr><td><form action="ekle.php" method="post">
<input type="hidden" name="kul_ad" value="'.$kul_ad.'"/>
<input type="hidden" name="asdfg" value="1"/>
<input type="text" name="me" size="100" autofocus/>
<input type="submit" value="GONDER"/></form></td></tr></table>
<table align="right"><tr>
<td><form action="temizle.php" method="get">
<input type="submit" value="Temizle"/></form></td>
<td><form action="cikis.php" method="post">
<input type="submit" value="Cikis"/></form></td>
</tr></table>
<iframe src="sohbet2.php" height="100%" width="100%" frameborder="0">');
?>