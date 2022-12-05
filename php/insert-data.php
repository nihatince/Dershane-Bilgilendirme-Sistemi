<?php
include('baglan.php');
$dizi=array();

$tc=$_POST['tc'];
$kulad=$_POST['kulad'];
$sifre=$_POST['sifre'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$telefon=$_POST['telefon'];
$email=$_POST['email'];
$dogtarih=$_POST['dogtarih'];
$sinif=$_POST['sinif'];
$alan=$_POST['alan'];


$stmt = $DBcon->prepare("INSERT INTO kayitol(tc,kulad,sifre,ad,soyad,telefon,email,dogtarih,sinif,alan) VALUES(:tc,:kulad, :sifre,:ad,:soyad,:telefon,:email,:dogtarih,:sinif,:alan)");
 
$stmt->bindparam(':tc', $tc);
$stmt->bindparam(':kulad', $kulad);
$stmt->bindparam(':sifre', $sifre);
$stmt->bindparam(':ad', $ad);
$stmt->bindparam(':soyad', $soyad);
$stmt->bindparam(':telefon', $telefon);
$stmt->bindparam(':email', $email);
$stmt->bindparam(':dogtarih', $dogtarih);
$stmt->bindparam(':sinif', $sinif);
$stmt->bindparam(':alan', $alan);
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