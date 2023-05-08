<?php
     require_once 'Crud/Crud.php';
    
    class Pengguna extends Crud{
        private $id_pengguna,
                $nama_pengguna,
                $password,
                $nama_depan,
                $nama_belakang,
                $no_hp,
                $alamat,
                $id_akses;
        
        public function __construct($id_pengguna = null, $nama_pengguna = null, $password = null, $nama_depan = null, $nama_belakang = null, $no_hp = null, $alamat = null, $id_akses = null)
        {
            parent::__construct('pengguna');
            $this->id_pengguna = $id_pengguna;
            $this->nama_pengguna = $nama_pengguna;
            $this->password = $password;
            $this->nama_depan = $nama_depan;
            $this->nama_belakang = $nama_belakang;
            $this->no_hp = $no_hp;
            $this->alamat = $alamat;
            $this->id_akses = $id_akses;
        }

        public function store($id_pengguna, $nama_pengguna, $password, $nama_depan, $nama_belakang, $no_hp, $alamat, $id_akses)
        {
            global $connect;
            $query = $query = "INSERT INTO pengguna (id_pengguna, nama_pengguna, password, nama_depan, nama_belakang, no_hp, alamat, id_akses) 
            VALUES ('$id_pengguna', '$nama_pengguna', '$password', '$nama_depan', '$nama_belakang', '$no_hp', '$alamat', '$id_akses')";

            mysqli_query($connect, $query);
        }

        public function fetchSingle($id_pengguna)
        {
            global $connect;
            $query = "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna' LIMIT 1;";

            mysqli_query($connect, $query);
        }

        public function update($id_pengguna, $nama_pengguna, $password, $nama_depan, $nama_belakang, $no_hp, $alamat, $id_akses)
        {
            global $connect;
            $query = "UPDATE pengguna 
                      SET 
                        nama_pengguna = '$nama_pengguna', 
                        password = '$password', 
                        nama_depan = '$nama_depan', 
                        nama_belakang = '$nama_belakang', 
                        no_hp = '$no_hp', 
                        alamat = '$alamat', 
                        id_akses = '$id_akses' 
            WHERE id_pengguna = '$id_pengguna'";

            mysqli_query($connect, $query);
        }

        public function delete($id_pengguna)
        {
            global $connect;
            $query = "DELETE FROM pengguna
                      WHERE id_pengguna = '$id_pengguna'    
            ";
            
            mysqli_query($connect, $query);
        }
    }