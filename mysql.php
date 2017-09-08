<?php
$host="localhost";
$kullanici="root";
$sifre="";
$veritabani="sohbet";
$baglanti=mysql_connect($host,$kullanici,$sifre);
if(!$baglanti){
die ('veritabani baglanti hatasi!!!');
}
else{
if(!mysql_select_db($veritabani,$baglanti))
{die ('veritabani secmede hata!!!');}
}?>
