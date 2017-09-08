<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Sohbet: Giris Yapin</title>
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<?php
if(isset($_GET['a']) && $_GET['a']==123){echo 'Hatali giris yaptiniz!!!';}
if(isset($_GET['a']) && $_GET['a']==321){echo 'Kayit Basarili, Giris yapabilirsiniz';}
?>
<form action="giris2.php" method="post">
Kullanici Adi :<input type="text" name="kul_ad"/><br>
Sifre :<input type="password" name="kul_pass"/><br>
<input type="submit" value="Giris Yap"/>
</form>
<form action="kaydol.php" method="post">
Kullanici Adi :<input type="text" name="kul_ad"/><br>
Sifre :<input type="password" name="kul_pass"/><br>
<input type="submit" value="Kaydol"/>
</form>
</body>
</html>
