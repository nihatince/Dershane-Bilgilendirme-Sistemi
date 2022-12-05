<?php

  include("baglan.php");
  session_start();
  ob_start();
  if(($_POST["kulad"]==$kulad) and ($_POST["sifre"]==$sifre)){
  $_SESSION["giris"] = "true";
  $_SESSION["kulad"] = $user;
  $_SESSION["sifre"] = $pass;
      
  
  header("Location:ogrpanel.php");
 }else{?>

<!doctype html>
<html lang="en">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Yönlendiriliyor...</title>
      
  </head>
    
    
  <body class="text-center">
        
      <div class="login-form">
          
        <form action="php/login.php" method="POST">
            
            <img src="../resim/3.png" class="mb-4 rounded-circle" height="100" width="100">
            <h1 class="h3 mb-4" ><font color="black">
            	<?php
  echo "Kullancı Adı veya Şifre Yanlış.<br>";
  
  

  }
  ob_end_flush();

  ?>
</font>
</h1>
            
          
            
            
            <p class="mt-2 mb-2 text-muted"><font color="black"><i><?php echo "Giriş sayfasına yönlendiriliyorsunuz.";   ?></i></font></p>
            
        </form>
          
      </div>
      
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
