<?php

  include("baglan.php");
ob_start();
  session_start();
  if(!isset($_SESSION["giris2"])){
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
                
                Öğretmen Panel
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ogretmenpanel.php" class="navbar-brand">Öğrenci Listele</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ogrenciekle.php" class="navbar-brand">Öğrenci Ve Ders Ekle</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="ogrliste.php" class="navbar-brand">Listele</a>
                    </li>
                    
                    
                    
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form action="logout2.php" method="POST">
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
           
       	<th>Kullanıcı Adı</th>
       	<th>Şifre</th>
       	<th>Ad</th>
           <th>Soyad</th>
       	<th>Telefon</th>
       	<th>Email</th>
           <th>Doğum Tarihi</th>
       	<th>Sınıf</th>
           <th>Alan</th>
           
           
       	
       </thead>
       <tbody>
       	  <?php 
     
        $query = $DBcon->query('SELECT * FROM kayitol ORDER BY id DESC',PDO::FETCH_ASSOC);
        

          foreach($query as  $row){
      
            ?>
           
                <tr id="<?=$row['id']?>">
                
                    <td data-target="id"><?=$row['id']?></td>
                
            	<td data-target="kulad"><?=$row['kulad']?></td>
            	<td data-target="sifre" ><?=$row['sifre']?></td>
                <td data-target="ad"><?=$row['ad']?></td>
            	<td data-target="soyad" ><?=$row['soyad']?></td>
                <td data-target="telefon"><?=$row['telefon']?></td>
            	<td data-target="email" ><?=$row['email']?></td>
                <td data-target="dogtarih"><?=$row['dogtarih']?></td>
            	<td data-target="sinif" ><?=$row['sinif']?></td>
                    <td data-target="alan" ><?=$row['alan']?></td>
            	
                   
                    
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
    
    
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
  
   
    
    
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

</html>
























<?php

  }
   ?>


