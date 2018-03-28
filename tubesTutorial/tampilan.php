<!DOCTYPE html> <!--mengawali program-->
<head> <!--membuat bagian atas program html-->
    <meta charset="UTF-8">
    <title>Tugas Tutorial</title> <!--membuat title diatas-->
    <link rel="icon"href="assets/images/mhs.jpg"> <!--memberi gambar diatas-->
    <link rel="stylesheet "type="text/css" href="assets/css/style.css"> <!--memanggil css-->
</head>
<body>
   
    
    <div id="header"> <!--memanggil css,guna untuk membuat header-->
        <h1 style="text-align: center">Sistem Informasi Akademik</h1>
        <h2 style="text-align: center">UNIVERSITAS MENUJU SUKSES</h2>
         <!--membuat judul halaman web dengan posisi di tengah dan berwarna biru-->
    </div>
    <div id="navigation"> <!--memanggil css,guna untuk membuat header-->
        <ul><li><a href="tampilan.php" style="color: white">Home</a></li> 
            <li><a href="profile.php" style="color: white">Profile</a></li>
            <li><a href="jdwkuliah.php" style="color: white">Jadwal Kuliah</a></li>
            <li><a href="akademik.php" style="color: white">Akademik</a></li>
          <!--memanggil link yang sudah dipanggil di href-->
    
    </ul>
    </div>
    <div id="main"> <!--memanggil css,guna untuk layout bagian tengah-->
         <h2>Kegiatan Kampus</h2>
         <table style="border: 3px black solid"> <!--membuat table -->
        <h3>Semester Ganjil</h3>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Registrasi & Pengisian KRS</td>
            <td style="border: 2px black solid; color: darkred"> 11-16 September 2017</td>
            <!--mengisi table -->
        </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Perkuliahan Tahap 1</td>
            <td style="border: 2px black solid; color: darkred"> 18 September- 04 Nopember 2017</td>
            <!--mengisi table -->
         </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Upacara Wisuda</td>
            <td style="border: 2px black solid; color: darkred"> 25 November</td>
            <!--mengisi table -->
         </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Dies Natalis</td>
            <td style="border: 2px black solid; color: darkred"> 23 Oktober 2017</td>
            <!--mengisi table -->
         </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Ujian Tengah Semester</td>
            <td style="border: 2px black solid; color: darkred"> 06-18 November</td>
            <!--mengisi table -->
         </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Perkuliahan Tahap 2</td>
            <td style="border: 2px black solid; color: darkred"> 27 November 2017-06 Januari 2018</td>
         <!--mengisi table -->
         </tr>
        <tr>
            <td style="border: 2px black solid; color:  darkred"> Ujian Akhir Semester</td>
            <td style="border: 2px black solid; color: darkred"> 08-20 Januari 2018</td>
        </tr>
        <tr>
            <td style="border: 2px black solid; color:  darkred"> Yudisium Akhir</td>
            <td style="border: 2px black solid; color: darkred"> 25 Januari 2018</td>
        </tr>
         </table>
        <table style="border: 3px black solid">
        <tr style=" text-align: center">
            <td style="border: 2px black solid;color: black"> Kegiatan </td>
            <td style="border: 2px black solid;color: black"> Waktu</td>
        </tr>
        <h3>Semester Genap</h3>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Registrasi & Pengisian KRS</td>
            <td style="border: 2px black solid; color: darkred"> 25-31 Januari 2018</td>
        </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Perkuliahan Tahap 1</td>
            <td style="border: 2px black solid; color: darkred"> 05 Februari-24 Maret 2018</td>
        </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Ujian Setengah Semester</td>
            <td style="border: 2px black solid; color: darkred"> 26 Maret-07 April 2018</td>
        </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Perkuliahan Tahap 2</td>
            <td style="border: 2px black solid; color: darkred"> 09 April-26 Mei</td>
        </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Ujian Akhir Semester</td>
            <td style="border: 2px black solid; color: darkred"> 08 Mei-09 Juni 2018</td>
        </tr>
         <tr>
            <td style="border: 2px black solid; color:  darkred"> Yudisium Semester 2</td>
            <td style="border: 2px black solid; color: darkred"> 27 Juni 2018</td>
        </tr>
         </table>
    </div>
    <div id="sidebar"> <!--memanggil css,guna untuk layout sisi kanan-->
        <h2>Tugas</h2>
        <p>Daftar Tugas yang belum dikumpulkan</p> <!--membuat paragraf-->
        <p>1. Pemrograman Web</p>
        <p>2. Administrasi Web Server</p>
  
    </div>
   
</div>
</body>

</html>