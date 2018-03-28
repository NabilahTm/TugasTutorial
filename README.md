# TugasTutorial
##Tutorial
````sh
Tutorial :
1.	Siapkan Neatbeans, Xampp, dan SQLyog
2.	Aktifkan Xampp. start pada Apache dan MySql
3.	Buat database di SQLyog
CREATE DATABASE akademik;			

GRANT ALL PRIVILEGES
ON akademik.*
TO 'root'@'localhost'
IDENTIFIED BY'';
FLUSH PRIVILEGES

 CREATE TABLE datapengunjung(
 nomer VARCHAR(20)NOT NULL,
 kodeMK VARCHAR(60) DEFAULT NULL
matkul VARCHAR(120) DEFAULT NULL, 
 sks VARCHAR(20) DEFAULT NULL,
 smtr VARCHAR(10) DEFAULT NULL,
 uts VARCHAR(10) DEFAULT NULL,
nilai VARCHAR(10) DEFAULT NULL,
bobot VARCHAR(10) DEFAULT NULL,
total INT(20) DEFAULT NULL
 );

4.	Kemudian kita buka browser,dengan alamat localhost kita pilih PhpMyAdmin untuk mengisi database yang telah kita buat.
5.	Setelah itu kita buka NeatBeans. Disini saya membuat Index.php, login.php, tampilan.php, akademik.php, jdwlkuliah.php, profile.php
6.	Membuat folder config yang berisi dao.php, dbconfig. Yang berfungsi untuk menghubungkan ke database yang telah kita buat tadi  dan menampilkan data yang telah kita buat melalui database.
7.	Lebih jelasnya saya jelaskan di program
````sh
##GambarAlert
![ss]()
