<?php

  include("baglan.php");
ob_start();
  session_start();
  if(!isset($_SESSION["giris"])){
  echo "Bu sayfayı görüntüleme yetkiniz yoktur.<br>";
      echo "Anasayfaya Yönlendiriliyorunuz.";
header("Refresh: 3; url=login.php");
  }else{

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formül Dershanesi</title>
    <link rel="stylesheet" type="text/css" href="/css/panel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
</head>

<body>
    
    <nav class="navbar navbar-dark bg-info navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="">
                
                Öğrenci Panel
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ogrpanel.php" class="navbar-brand">Öğrenci Listele</a>
                    </li>
                    
                    
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form action="logout.php" method="POST">
                            <input type="submit" name="buton" value="Çıkış Yap"class="btn float-right btn-warning">

                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php require 'baglan.php';?>
	 <div class="container pt-5 pb-5">        
      <table class="table"> 
       <thead>
           
           <th>İD</th>
           
       	<th>Ad</th>
       	<th>Soyad</th>
       	<th>Alan</th>
           <th>Sınıf</th>
       	<th>Türkçe Net</th>
       	<th>Sosyal Net</th>
           <th>Matematik Net</th>
       	<th>Fen Net</th>
           
           
       	
       </thead>
       <tbody>
       	  <?php 
     
        $query = $DBcon->query('SELECT * FROM ogrenci ORDER BY id DESC',PDO::FETCH_ASSOC);
        

          foreach($query as  $row){
      
            ?>
           
                <tr id="<?=$row['id']?>">
                
                    <td data-target="id"><?=$row['id']?></td>
                
            	<td data-target="ad"><?=$row['ad']?></td>
            	<td data-target="soyad" ><?=$row['soyad']?></td>
                <td data-target="alan"><?=$row['alan']?></td>
            	<td data-target="sinif" ><?=$row['sinif']?></td>
                <td data-target="turkce"><?=$row['turkce']?></td>
            	<td data-target="sosyal" ><?=$row['sosyal']?></td>
                <td data-target="matematik"><?=$row['matematik']?></td>
            	<td data-target="fen" ><?=$row['fen']?></td>
            	
                   
                    
            </tr>
            <?php

          }  
  
       	  ?>

       </tbody>

      </table>
 
	 </div>




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Öğrenci Düzenle</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Ad:</label>
            <input id="ad" type="text" class="form-control" id="recipient-name">
          </div>
            
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Soyad:</label>
            <textarea id="soyad" class="form-control" id="message-text"></textarea>
          </div>
            
            <div class="mb-3">
            <label for="inputState">Alanı:</label>
      <select id="alan" name="alan" id="inputState" type="sınıf" class="form-control" required>
          <option selected>Seçiniz</option>
        <option>TYT-AYT</option>
        <option>DGS</option>
          <option>LGS</option>
          <option>KPSS</option>
          
      </select>
          </div>
            
            <div class="mb-3">
            <label for="inputState">Sınıf:</label>
      <select id="sinif" name="sinif" id="inputState" type="sınıf" class="form-control" required>
          <option selected>Seçiniz</option>
        <option>8.Sınıf</option>
        <option>9.Sınıf</option>
          <option>10.Sınıf</option>
          <option>11.Sınıf</option>
          <option>12.Sınıf</option>
          <option>Mezun</option>
      </select>
          </div>
            
            <div class="mb-3">
            <label for="message-text" class="col-form-label">Türkçe Net:</label>
            <textarea id="turkce" class="form-control" id="message-text"></textarea>
          </div>
            
            <div class="mb-3">
            <label for="message-text" class="col-form-label">Sosyal Net:</label>
            <textarea id="sosyal" class="form-control" id="message-text"></textarea>
          </div>
            
            <div class="mb-3">
            <label for="message-text" class="col-form-label">Matematik Net:</label>
            <textarea id="matematik" class="form-control" id="message-text"></textarea>
          </div>
            
            <div class="mb-3">
            <label for="message-text" class="col-form-label">Fen Net:</label>
            <textarea id="fen" class="form-control" id="message-text"></textarea>
          </div>
            
            
            
          <input type="hidden" id="konu_id" name="">
            
        </form>
      </div>
      <div class="modal-footer">
      	<a href="" id="save" class="btn btn-primary pull-right">Güncelle</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
    
    <?php
        include("baglan.php");
    
    if ($_GET) {
    $id = $_GET["sil"];

    $sil = $DBcon->prepare("DELETE FROM ogrenci WHERE id=:id");
    $sil->execute(array(":id" => $id));
    if ($sil) {
        echo "Silme İşlemi Başarı ile Gerçekleşti";
        header("Location:ogretmenpanel.php");
    } else {
        echo "hata oluştu";
    }
}

?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
   <script>
   	  
   	  $(function(){

      
   
      $(document).on('click','a[data-role=update]',function(e){
       
   
       var id = $(this).data('id');  
       
      
          
          
    
       var ad   = $('#'+id).children('td[data-target=ad]').text();
          
       var soyad = $('#'+id).children('td[data-target=soyad]').text();
          
        var alan = $('#'+id).children('td[data-target=alan]').text();
          
          var sinif = $('#'+id).children('td[data-target=sinif]').text();
          
          var turkce = $('#'+id).children('td[data-target=turkce]').text();
          
          var sosyal = $('#'+id).children('td[data-target=sosyal]').text();
          
          var matematik = $('#'+id).children('td[data-target=matematik]').text();
          
          var fen = $('#'+id).children('td[data-target=fen]').text();
        
       
       $('#tc').val(tc);
       $('#ad').val(ad);
       $('#soyad').val(soyad);
       $('#alan').val(alan);
       $('#sinif').val(sinif);
       $('#turkce').val(turkce);
       $('#sosyal').val(sosyal);
       $('#matematik').val(matematik);
       $('#fen').val(fen);
       $('#konu_id').val(id);
       $('.modal').modal('toggle');
     
  
     e.preventDefault();

      });
  
     $('#save').click(function(e){

       // burda kayıt ederken value değerlerini alıyoruz..	
      
      var id       =  $('#konu_id').val();  
      var tc   =  $('#tc').val();
      var ad   =  $('#ad').val();
      var soyad =  $('#soyad').val();
      var alan   =  $('#alan').val();
      var sinif =  $('#sinif').val();
      var turkce   =  $('#turkce').val();
      var sosyal =  $('#sosyal').val();
      var matematik   =  $('#matematik').val();
      var fen =  $('#fen').val();
        
        // ajax ile değerleri gönderiyoruz..
   
       $.ajax({
   
         url    : 'ajax.php',
         method : 'post',
         data   : {tc : tc, ad : ad, soyad : soyad, alan : alan, sinif : sinif, turkce : turkce, sosyal : sosyal, matematik : matematik, fen : fen, id : 
         	id},
         success: function(e){

         	// işlemi başarılıysa list ekranında değerlerin değişmiş hali gözükmesi aşağıdaki kodları yazıyoruz idsi eşit olan değeri düzenleme işlemi yapıyoruz..
             $('#'+id).children('td[data-target=tc]').text(tc);
             
         	$('#'+id).children('td[data-target=ad]').text(ad);
             
         	$('#'+id).children('td[data-target=soyad]').text(soyad);
             
             $('#'+id).children('td[data-target=alan]').text(alan);
             
         	$('#'+id).children('td[data-target=sinif]').text(sinif);
             
             $('#'+id).children('td[data-target=turkce]').text(turkce);
             
         	$('#'+id).children('td[data-target=sosyal]').text(sosyal);
             
             $('#'+id).children('td[data-target=matematik]').text(matematik);
             
         	$('#'+id).children('td[data-target=fen]').text(fen);
             
         	 $('.modal').modal('toggle');

         }

       });
    // burda da aynı şekilde sayfa yenilenmeyi engelledik
e.preventDefault();
      
     });


   	  });

   </script>
    
    
    
   
    
    
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

</html>
























<?php

  }
   ?>


