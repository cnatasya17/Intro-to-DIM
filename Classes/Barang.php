<?php
    require_once 'Crud/Crud.php';

    class Barang extends Crud{
        private $id_barang,
                $nama_barang,
                $keterangan,
                $satuan,
                $id_pengguna;
        
        
        public function __construct($id_barang = null, $nama_barang = null, $keterangan = null, $satuan = null, $id_pengguna = null)
        {
            parent::__construct('barang');
            $this->id_barang = $id_barang;
            $this->nama_barang = $nama_barang;
            $this->keterangan = $keterangan;
            $this->satuan = $satuan;
            $this->id_pengguna = $id_pengguna;
        }

        public function store($id_barang, $nama_barang, $keterangan, $satuan, $id_pengguna)
        {
            global $connect;
            $query = "INSERT INTO barang (id_barang, nama_barang, keterangan, satuan, id_pengguna)
                      VALUES ('$id_barang', '$nama_barang', '$keterangan', '$satuan', '$id_pengguna');
            ";

            mysqli_query($connect, $query);
        }

        public function fetchSingle($id_barang)
        {
            global $connect;
            $query = "SELECT * FROM barang WHERE id_barang = '$id_barang' LIMIT 1;";

            mysqli_query($connect, $query);
        }

        public function update($id_barang, $nama_barang, $keterangan, $satuan, $id_pengguna)
        {
            global $connect;
            $query = "UPDATE barang 
                      SET 
                        nama_barang = '$nama_barang', 
                        keterangan = '$keterangan', 
                        satuan = '$satuan', 
                        id_pengguna = '$id_pengguna' 
                    WHERE id_barang = $id_barang
            ";
            mysqli_query($connect, $query);
        }

        public function delete($id_barang)
        {
            global $connect;
            $query = "DELETE FROM barang
                      WHERE id_barang = '$id_barang'    
            ";
            
            mysqli_query($connect, $query);
        }
    }