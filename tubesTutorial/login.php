<?php 
session_start();/*untuk memulai*/
$user = $_POST["inEmail"];/*untuk memanggil id username di login.php*/
$pass = $_POST["inPassword"];/*untuk memanggil id password di login.php*/
//================================
$dbuser = "admin@gmail.com";/*membuat username untuk login*/
$dbpass = "admin123";/*membuat password untuk login*/
//================================
if($user == $dbuser && $pass == $dbpass){ /*jika username dan password sama akan di post ke tampilan.php*/
    ?>
<script>
    window.location="tampilan.php";
    </script>
<?php
}else {
   if(isset($_SESSION["gagal"])){
       $_SESSION["gagal"]++;
   }else{
       $_SESSION["gagal"] = 1;
   } 
   header("location:index.php"); /*jika gagal akan dikirim ke index.php*/
}






