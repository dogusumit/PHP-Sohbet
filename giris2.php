<?php
if(!empty($_POST["kul_ad"])){
if(!empty($_POST["kul_pass"])){
$kul_ad=$_POST["kul_ad"];
if(!ctype_alnum($kul_ad))
{echo 'Kullanici adi icin sadece rakamlar ve harfler!'; exit;}
$kul_pass=$_POST["kul_pass"];
if(!ctype_alnum($kul_pass))
{echo 'Sifre icin sadece rakamlar ve harfler!'; exit;}
include 'mysql.php';
$sorgu='select * from uyeler where ad="'.$kul_ad.'" and sifre="'.$kul_pass.'";';
try {
$sonuc=mysql_query($sorgu,$baglanti);
if(mysql_num_rows($sonuc)>0){
setcookie("asdqweasdqwe",$kul_ad,time()+3600);
echo 'basariyla giris yapildi';
header("Refresh:1 ; sohbet.php"); }
else{header('Location: index.php?a=123');}
}catch(Exception $e){
   echo $e->getMessage();
}
}else{header('Location: index.php?a=123');}
}else{header('Location: index.php?a=123');}?>
