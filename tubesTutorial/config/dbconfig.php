<?php
//ini_set('dislay_error', 1);
//error_reporting(E_ALL);
define('DB_HOST', 'localhost');/*server yang dibuat saat membuat database*/
define('DB_USER', 'root');/*membuat namauser untuk masuk phpMyAdmin*/
define('DB_PASS', '');/*memberi pasword di server untuk masuk phpMyadmin*/
define('DB_NAME', 'akademik');/*memanggil database yang telah kita buat*/

class Dbconfig {/*membuat class di dbconfig*/
    var $conn;/*membuat variable*/

    function __construct() { /*membuat fungsi constructor*/
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);/*memanggil data*/
        if ($this->conn->connect_error) {
            echo $this->conn->connect_error;
        }/*jika con error*/
    }

}


