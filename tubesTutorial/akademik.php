<!DOCTYPE html> <!--mengawali program-->
<html> <!--membuat bagian atas program html-->
    <head>
        <meta charset="UTF-8">
        <title>Akademik</title> <!--membuat title diatas-->
        <link rel="icon"href="assets/images/mhs.jpg"> <!--memberi gambar diatas-->
         <style> 
            body{ background-image: url("assets/images/t.jpg");background-repeat: no-repeat; 
            background-position:center ;background-size: 600%;}
        </style>
        <!--membuat baground gambar pada halaman web-->
    </head>
    <body>
         <h1 style="text-align: center;color: blue">Sistem Informasi Akademik</h1>
        <h2 style="text-align: center; color: blue">UNIVERSITAS MENUJU SUKSES</h2>
        <hr>
        <h3 style="text-align: center">KARTU HASIL STUDY</h3>
        <?php
    
        include_once './config/dao.php';
        $dao = new Dao();
        $res = $dao->read();
        $result = $dao->read();
        //$list = mysqli_fetch_array($result);
        //print_r($list);
        ?>
    <center>
        <table border="1">
             <tr>
            <td style="text-align: center;color: red"> Nomer</td>
            <td style="text-align: center;color: red" >kode Matakuliah</td>
            <td style="text-align: center;color: red" >Mata Kuliah</td>
            <td style="text-align: center;color: red">Sks</td>
            <td style="text-align: center;color: red">Semester</td>
            <td style="text-align: center;color: red">Uts</td>
            <td style="text-align: center;color: red">Nilai</td>
            <td style="text-align: center;color: red">Bobot</td>
            <td style="text-align: center;color: red">Total</td>
             </tr>
        <?php
                while  ( $data= mysqli_fetch_array($result)) {
            echo "<tr>
            <td>" . $data['nomer'] . "</td>
            <td>" . $data['kodeMK'] . "</td>
            <td>" . $data['matkul'] . "</td>
            <td>" . $data['sks'] . "</td>
            <td>" . $data['smtr'] . "</td>
            <td>" . $data['uts'] . "</td>
            <td>" . $data['nilai'] . "</td>
            <td>" . $data['bobot'] . "</td>
            <td>" . $data['total'] . "</td>
              </tr>";
        }
        ?>
        </table>
        </center>
    </body>
</html>



