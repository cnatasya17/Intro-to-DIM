<?php
     require_once 'Crud/Crud.php';

    class Pembelian extends Crud{
        private $id_pembelian,
                $jumlah_pembelian,
                $harga_beli,
                $id_pengguna,
                $id_barang,
                $id_supplier;
            
        public function __construct($id_pembelian = null, $jumlah_pembelian = null, $harga_beli = null, $id_pengguna = null, $id_barang = null, $id_supplier = null)
        {
            parent::__construct('pembelian');
            $this->id_pembelian = $id_pembelian;
            $this->jumlah_pembelian = $jumlah_pembelian;
            $this->harga_beli = $harga_beli;
            $this->id_pengguna = $id_pengguna;
            $this->id_barang = $id_barang;
            $this->id_supplier = $id_supplier;
        }

        public function store($id_pembelian , $jumlah_pembelian , $harga_beli , $id_pengguna , $id_barang , $id_supplier)
        {
            global $connect;
            $query = "INSERT INTO pembelian (id_pembelian, jumlah_pembelian, harga_beli, id_pengguna, id_barang, id_supplier) 
                      VALUES ('$id_pembelian', '$jumlah_pembelian', '$harga_beli', '$id_pengguna', '$id_barang', '$id_supplier')";

            mysqli_query($connect, $query);
        }

        public function fetchSingle($id_pembelian)
        {
            global $connect;
            $query = "SELECT * FROM pembelian WHERE id_pembelian = '$id_pembelian' LIMIT 1;";

            mysqli_query($connect, $query);
        }

        public function update($id_pembelian , $jumlah_pembelian , $harga_beli , $id_pengguna , $id_barang , $id_supplier)
        {
            global $connect;
            $query = "UPDATE pembelian 
                      SET 
                        jumlah_pembelian = '$jumlah_pembelian',
                        harga_beli = '$harga_beli',
                        id_pengguna = '$id_pengguna',
                        id_barang = '$id_barang',
                        id_supplier = '$id_supplier'
                      WHERE id_pembelian = '$id_pembelian'";

            mysqli_query($connect, $query);
        }

        public function delete($id_pembelian)
        {
            global $connect;
            $query = "DELETE FROM pembelian
                      WHERE id_pembelian = '$id_pembelian'    
            ";
            
            mysqli_query($connect, $query);
        }
    }