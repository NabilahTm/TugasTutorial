<?php
session_start();/*untuk memulai*/
if (isset($_SESSION["gagal"])){
    if($_SESSION["gagal"] >=3){
        echo '<h1 style="text-align:center;">anda di blokir</h1>';
        exit();
    }
}
/* memanggil memblokir apabila terjadi kesalahn login 3 kali*/
?>
<!DOCTYPE html> <!--mengawali program-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tugas Tutorial</title>
        <link rel="icon"href="assets/images/mhs.jpg"> <!--memberi gambar diatas-->
        <link rel="stylesheet"href="assets/css/bootstrap.css"> <!--memanggil css-->
        <link rel="stylesheet"href="assets/css/floating-labels.css"> <!--memanggil css-->
        <script src="assets/js/jquery.min.js"></script> <!--memanggil java script-->
        <script src="assets/js/popper.min.js"></script> <!--memanggil java script-->
        <script src="assets/js/bootstrap.min.js"></script> <!--memanggil java script-->
        <script> <!--membuat alert-->
          
           window.setTimeout(function (){
           $(".alert").fadeTo(500,0).slideUp(500,function (){
           $(this).remove();
           });
           },8dkb000);
         
        </script>
        <style> 
            body{ background-image: url("assets/images/t.jpg");background-repeat: no-repeat; 
            background-position:center ;background-size: 450%;}
        </style>
        <!--membuat baground gambar pada halaman web-->
    </head>
    <body >
        <form id="frm01" name="frm01"method="POST" action="login.php" class="form-signin">
    <!--mengirim le login.php apabila kondisi benar-->
            <div class="text-center mb-3"> 
                <img class="mb-3"src="assets/images/multy-user.png" width="150"height="150"> <!--membuat gambar/logo-->
                <h3>Sistem Informasi Akademik</h3>
                <h1 style="color: red">Login</h1> 
            </div>
 <?php 
if (isset($_SESSION["gagal"])){ 
    if($_SESSION["gagal"] <3){
        echo'   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                anda gagal login ke-'.$_SESSION["gagal"].'......!!!'.'
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
}
/* Untuk pemberitauan kesalahan berapa kali */
?>
            <div class="form-label-group">
                <input name="inEmail"   class="form-control" type="email"id="inEmail" placeholder="Email Address" autofocus="yes" autocomplete="no" required="yes" >
            <label for="inEmail">Email Addres</label> <!--membuat label email-->
            </div>
            <div class="form-label-group">
                <input name="inPassword" class="form-control" type="password"id="inPassword"placeholder="password" required="yes">
                <label for="inPassword">Password</label> <!--membuat label pasword-->
            </div>
            <div class="checkbox mb-2">
                <label style="color: #004085">
                    <input type="checkbox"> Remember me...? <!--membuat checkbox email-->
                </label>
            </div>
            <button type="submit" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#ModalKu">
                 <img class="mb-8" width="27" height="27" src="assets/images/gem.png"> 
                Login</button> <!--membuat button -->
    
        </form> 
        <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledy="DialogModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel01">
                            Message!!!!
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            &times;
                        </button>
                    </div> 
                    <div class="modal-body" >
                        <p> Lengkapi Nim dan Password dulu Guys!!</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-primary" type="button" data-dismiss="modal"> 
                            Ok
                        </button>
                    </div>
                </div> 
            </div>   
        </div>
        <!--membuat dialaog jika email dan pasword belum lengkap-->
    </body>
</html>

