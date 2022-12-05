<?php 
  
  require 'baglan.php';
   
   if($_POST){

   	  $id =  $_POST['id'];
       $tc  = $_POST['tc'];
      $ad  = $_POST['ad'];
      $soyad = $_POST['soyad'];
      $alan  = $_POST['alan'];
      $sinif = $_POST['sinif'];
      $turkce  = $_POST['turkce'];
      $sosyal = $_POST['sosyal'];
      $matematik  = $_POST['matematik'];
      $fen = $_POST['fen'];

      $query = $DBcon->prepare('update ogrenci set 
        tc = :tc,
         ad = :ad,
         soyad = :soyad ,
         alan = :alan,
         sinif = :sinif,
         turkce = :turkce,
         sosyal = :sosyal,
         matematik = :matematik,
         fen = :fen where id = :id

      	');

     $ok =  $query->execute([
         'tc' => $tc,
          'ad' => $ad,
          'soyad' => $soyad,
          'alan' => $alan,
          'sinif' => $sinif,
          'turkce' => $turkce,
          'sosyal' => $sosyal,
          'matematik' => $matematik,
          'fen' => $fen,
          'id' => $id
      ]); 

      if($ok){
      	echo 'güncelleme başarılı';
      }else {
   
        echo 'güncelleme hatası';

      }    
}

?>