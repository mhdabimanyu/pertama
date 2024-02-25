<?php
    include "koneksi.php";

    @session_start();
    error_reporting(0);

    $email=$_POST['email'];
    $password=md5($_POST['password']);


    if(isset($_POST['register'])){
        $abi=mysqli_query($conn,"INSERT INTO tbl_abi VALUES('','$email','$password')");

        
        
         if(empty($email)){
          ?>
                <script>
                    alert("email tidak boleh kosong");
                </script>
            <?php
            
        }else if(empty($password)){
          ?>
                <script>
                    alert("password tidak boleh kosong");
                </script>
            <?php
           } else if(!empty($email)&&($password)){
          if($abi){
            ?>
                <script>
                    alert("Anda Berhasil Mendaftar");

                    document.location="index.php";
                </script>
            <?php
        }
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <div class="container-fluid py-5">
    <div class="row shadow-lg p-3 mb-5 bg-body rounded w-50 mx-auto ">
    <h2><center>halaman login</center></h2>
    <form class="text-center" method="post">
       
        <input type="text" placeholder="Email" name="email"><br><br>
        <input type="password" placeholder="Password" name="password"><br><br>
      

        <button   name="register" class="btn btn-primary">submit</button>
        
    </form>
    </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>