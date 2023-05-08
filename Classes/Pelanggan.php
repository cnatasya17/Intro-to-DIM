<?php
     require_once 'Crud/Crud.php';
    
    class Pelanggan extends Crud{
        private $id_pelanggan,
                $nama_pelanggan,
                $nama_depan,
                $nama_belakang,
                $email,
                $no_hp,
                $alamat,
                $password,
                $id_penjualan;
        
        public function __construct($id_pelanggan = null, $nama_pelanggan = null, $nama_depan = null, $nama_belakang = null, $email = null, $no_hp = null, $alamat = null, $password = null, $id_penjualan = null)
        {
            parent::__construct('pelanggan');
            $this->id_pelanggan = $id_pelanggan;
            $this->nama_pelanggan = $nama_pelanggan;
            $this->nama_depan = $nama_depan;
            $this->nama_belakang = $nama_belakang;
            $this->email = $email;
            $this->no_hp = $no_hp;
            $this->alamat = $alamat;
            $this->password = $password;
            $this->id_penjualan = $id_penjualan;
        }

        public function store($id_pelanggan , $nama_pelanggan , $nama_depan , $nama_belakang , $email , $no_hp , $alamat , $password , $id_penjualan )
        {
            global $connect;
            $query = "INSERT INTO pelanggan (id_pelanggan,nama_pelanggan,nama_depan,      nama_belakang, email, no_hp,alamat, password, id_penjualan) 
                      VALUES('$id_pelanggan', '$nama_pelanggan', '$nama_depan', '$nama_belakang', '$email', '$no_hp', '$alamat', '$password', '$id_penjualan');
            ";

            mysqli_query($connect, $query);
        }

        public function fetchSingle($id_pelanggan)
        {
            global $connect;
            $query = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan' LIMIT 1;";

            mysqli_query($connect, $query);
        }

        public function update($id_pelanggan , $nama_pelanggan , $nama_depan , $nama_belakang , $email , $no_hp , $alamat , $password , $id_penjualan)
        {
            global $connect;
            $query = "UPDATE pelanggan SET 
                            nama_pelanggan = '$nama_pelanggan', 
                            nama_depan = '$nama_depan', 
                            nama_belakang = '$nama_belakang', 
                            email = '$email', 
                            no_hp = '$no_hp', 
                            alamat = '$alamat', 
                            password = '$password', 
                            id_penjualan = '$id_penjualan' 
                      WHERE id_pelanggan = '$id_pelanggan'";
            mysqli_query($connect, $query);
        }

        public function delete($id_akses)
        {
            global $connect;
            $query = "DELETE FROM hak_akses
                      WHERE id_akses = '$id_akses'    
            ";
            
            mysqli_query($connect, $query);
        }

        
    }