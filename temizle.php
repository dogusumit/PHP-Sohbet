<?php
if(isset($_GET["ok"]) && $_GET["ok"]==123){
include 'mysql.php';
$sorgu='TRUNCATE TABLE mesajlar;';
$sonuc=mysql_query($sorgu,$baglanti);
echo "TAMAM!";
}
?>