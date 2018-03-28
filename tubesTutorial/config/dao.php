<?php
include_once 'dbconfig.php';/*memanggil dbconfig*/

class Dao{ /*membuat class dao*/
    var $db;/*membuat variable*/
    public function __construct() { /*memanggil function di dao.php*/
        $this->db = new Dbconfig(); /*variable db diubah menjadi Dbconfig*/
    }
    public function read(){ /*untuk membaca function*/
        $query = 'Select * from khs';/*untuk menampilkan database dari PhpMyadmin*/
        return mysqli_query($this->db->conn, $query);/*mengembalikan db/con ke query*/
    }
    
}



