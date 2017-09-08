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
$sorgu="insert into uyeler(ad,sifre) values('".$kul_ad."','".$kul_pass."');";
try {
$sonuc=mysql_query($sorgu,$baglanti);
echo 'basariyla kayıt yapildi';
header("Refresh:1 ; index.php?a=321"); 
}
catch(Exception $e)
{
   echo $e->getMessage();
}
}
}
?>