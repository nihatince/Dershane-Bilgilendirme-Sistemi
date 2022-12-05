<?php

  include("baglan.php");
ob_start();
  session_start();
  if(!isset($_SESSION["giris2"])){
  echo "Bu sayfayı görüntüleme yetkiniz yoktur.<br>";
      echo "Anasayfaya Yönlendiriliyorunuz.";
header("Refresh: 3; url=ogretmenlogin.php");
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
    
    
    
    <link href="../css/stylee.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        
        <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
    
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


    

    

    
   
    
    
    <div class="con">  
      <form id="contt" action="" method="">
       <center> <h3>EKLE</h3>
        <h4>Öğrenci Ekle</h4></center>
          
          
          <fieldset>
          <input id="tc" name="tc" placeholder="TC Kimlik" type="text" required>
          </fieldset>
          
          
          
          <fieldset>
          <input id="ad" name="ad" placeholder="Adı" type="text" required>
          </fieldset>
          
          <fieldset>
          <input id="soyad" name="soyad" placeholder="Soyad" type="text" required>
          </fieldset>
          <br>
       <fieldset>  
          <label for="inputState">Alanı:</label>
      <select id="alan" name="alan" id="inputState" type="sınıf" class="form-control" required>
          <option selected>Seçiniz</option>
        <option>TYT-AYT</option>
        <option>DGS</option>
          <option>LGS</option>
          <option>KPSS</option>
          
      </select>
            </fieldset>
          <br>
          <fieldset>  
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
            </fieldset>
          <br>
        <fieldset>
            Türkçe Net
          <input id="turkce" name="turkce" placeholder="Türkçe Net" type="text" required>
        
          </fieldset>
          
          <fieldset>
            Sosyal Net
          <input id="sosyal" name="ad" placeholder="Sosyal Net" type="text" required>
        
          </fieldset>
          
          <fieldset>
            Matematik Net
          <input id="matematik" name="matematik" placeholder="Matematik Net" type="text" required>
        
          </fieldset>
          
          <fieldset>
            Fen Net
          <input id="fen" name="fen" placeholder="Fen Net" type="text" required>
        
          </fieldset>
          
        
          
          
          
        
            
          
          
          
       
        <fieldset>
         
            
            <button id="contt" type="submit" class="btn btn-success btn-block" name="insert-data" id="insert-data" onclick="insertData()">Öğrenci Ekle</button>
        </fieldset>
          
          <p id="message"></p>
      </form>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
</body>

<?php ob_end_flush(); ?>

</html>


<script type="text/javascript">
 
  function insertData() {
     
      var tc=$("#tc").val();
    var ad=$("#ad").val();
    var soyad=$("#soyad").val();
    var alan=$("#alan").val();
      var sinif=$("#sinif").val();
      var turkce=$("#turkce").val();
      var sosyal=$("#sosyal").val();
      var matematik=$("#matematik").val();
      var fen=$("#fen").val();
      
 
 
// AJAX ile veri php dosyasına gönderiliyor.
        $.ajax({
            type: "POST",
            url: "insert-data2.php",
            data: {tc:tc,ad:ad,soyad:soyad,alan:alan,sinif:sinif,turkce:turkce,sosyal:sosyal,matematik:matematik,fen:fen},
            dataType: "JSON",
            success: function(cevap) {
             $("#message").html(cevap);
            $("p").addClass("alert alert-success");
            },
            error: function(err) {
				var msg="";
				if(err.status)
				{ msg="Bir hata oluştu!";
				   $("#message").html(msg);
                   $("p").addClass("alert alert-danger");
				}           
            }
        });
 
} 
  </script>





















<?php

  }
   ?>
