<?php
include('baglan.php');
$dizi=array();

$tc=$_POST['tc'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$alan=$_POST['alan'];
$sinif=$_POST['sinif'];
$turkce=$_POST['turkce'];
$sosyal=$_POST['sosyal'];
$matematik=$_POST['matematik'];
$fen=$_POST['fen'];



$stmt = $DBcon->prepare("INSERT INTO ogrenci(tc,ad,soyad,alan,sinif,turkce,sosyal,matematik,fen) VALUES(:tc,:ad, :soyad,:alan,:sinif,:turkce,:sosyal,:matematik,:fen)");
 
$stmt->bindparam(':tc', $tc);
$stmt->bindparam(':ad', $ad);
$stmt->bindparam(':soyad', $soyad);
$stmt->bindparam(':alan', $alan);
$stmt->bindparam(':sinif', $sinif);
$stmt->bindparam(':turkce', $turkce);
$stmt->bindparam(':sosyal', $sosyal);
$stmt->bindparam(':matematik', $matematik);
$stmt->bindparam(':fen', $fen);
if($stmt->execute())
{
  $res="Veri eklendi";
  echo json_encode($res);
}
else {
  $error="Veri Eklenemedi,problem oluştu.";
  echo json_encode($error);
} 
?>