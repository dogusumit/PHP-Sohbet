<?php
include 'mysql.php';
$a=$_POST['me'];
$b=$_POST['kul_ad'];
$sorgu='insert into mesajlar(mesaj,yukleyen) values("'.
$a.'","'.$b.'");';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
else{header('Location: sohbet.php');}
?>
