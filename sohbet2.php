<?php
session_start();
include 'mysql.php';
$kul_ad=$_COOKIE["asdqweasdqwe"];
$sonid = mysql_fetch_assoc(mysql_query('SELECT * FROM mesajlar where yukleyen<>"'.$kul_ad.'" ORDER BY id DESC LIMIT 1')); 
$son = $sonid['id'];
if(isset($_SESSION['son'])){
if($_SESSION['son']<$son){
echo '<embed src="ses.mp3" autostart="true" hidden="true"></embed>';
$_SESSION['son']=$son;}}
else{  $_SESSION['son']=$son;}
$sorgu='select * from mesajlar order by id desc;';
$sonuc=mysql_query($sorgu,$baglanti);
if(!$sonuc){echo 'mysql hatasi!!!'.mysql_error(); exit;}
print ('<table border="0"');
while($yaz=mysql_fetch_assoc($sonuc)){
print('<tr><td><font color="blue">'.$yaz["yukleyen"].' : </font><b>'.$yaz['mesaj'].'</b></td></tr>');}
print('</table><META HTTP-EQUIV="Refresh" CONTENT="3;URL=sohbet2.php">');
?>