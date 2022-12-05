



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Formül Dershanesi</title>
        <link href="../css/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        
        <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        
    </head>
    <body>
        
        
        <nav class="navbar navbar-expand-lg navbar-light  fixed-top " id="mainNav">
            <div class="container">
               
               
              
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 ">
                        <li class="nav-item " ><a class="nav-link" href="../index.php">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="../index.php#hakkında">Hakkında</a></li>
                        <li class="nav-item"><a class="nav-link" href="../index.php#hizmetler">Hizmetler</a></li>
                        <li class="nav-item"><a class="nav-link" href="../index.php#galeri">Galeri</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="../index.php#konum">Konum</a></li>
                        
                        
                        
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
        
        
        
        
    <div class="con">  
      <form id="contt" action="" method="">
       <center> <h3>Kayıt Ol</h3>
        <h4>Kayıt Formu</h4></center>
          
          
          
          <fieldset>
          <input id="tc" name="tc" placeholder="TC Kimlik" type="text" required>
          </fieldset>
          
          
          <fieldset>
          <input id="kulad" name="kulad" placeholder="Kullanıcı Adı" type="text" required>
          </fieldset>
          
          <fieldset>
          <input id="sifre" name="sifre" placeholder="Şifre" type="password" required>
          </fieldset>
          
        <fieldset>
          <input id="ad" name="ad" placeholder="Adınız" type="text" required>
        </fieldset>
          
        <fieldset>
          <input id="soyad" name="soyad" placeholder="Soyadınız" type="text" required>
        </fieldset>
          
        <fieldset>
          <input id="telefon" name="telefon" placeholder="Telefon" type="tel" required>
        </fieldset>
          
        <fieldset>
          <input id="email" name="email" placeholder="Email" type="email" required>
        </fieldset>
          
         <fieldset>
             Doğum Tarihi:
             <input id="dogtarih" name="dogtarih" type="date" name="yas" required>
         </fieldset>
          
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
          
          
          <fieldset>  
          <label for="inputState">Alan Seçiniz:</label>
      <select id="alan" name="alan" id="inputState" type="sınıf" class="form-control" required>
          <option selected>Seçiniz</option>
        <option>TYT-AYT</option>
        <option>DGS</option>
          <option>LGS</option>
          <option>KPSS</option>
          
      </select>
            </fieldset>
        
            
          
          
          
       
        <fieldset>
         
            
            <button id="contt" type="submit" class="btn btn-success btn-block" name="insert-data" id="insert-data" onclick="insertData()">Kayıt Ol</button>
        </fieldset>
          
          <p id="message"></p>
      </form>
    </div>
    </body>
    
    
    <script type="text/javascript">
 
  function insertData() {
      var tc=$("#tc").val();
    var kulad=$("#kulad").val();
    var sifre=$("#sifre").val();
    var ad=$("#ad").val();
      var soyad=$("#soyad").val();
      var telefon=$("#telefon").val();
      var email=$("#email").val();
      var dogtarih=$("#dogtarih").val();
      var sinif=$("#sinif").val();
      var alan=$("#alan").val();
 
 
// AJAX ile veri php dosyasına gönderiliyor.
        $.ajax({
            type: "POST",
            url: "insert-data.php",
            data: {tc:tc,kulad:kulad,sifre:sifre,ad:ad,soyad:soyad,telefon:telefon,email:email,dogtarih:dogtarih,sinif:sinif,alan:alan},
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
    
    
    
    
    
    
    
    
    
    
</html>