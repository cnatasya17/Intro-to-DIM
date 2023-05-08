<?php
     require_once 'Crud/Crud.php';

    class Penjualan extends Crud{
        private $id_penjualan,
                $jumlah_penjualan,
                $harga_jual,
                $id_barang,
                $id_pelanggan;
        
        public function __construct($id_penjualan = null, $jumlah_penjualan = null, $harga_jual = null, $id_barang = null, $id_pelanggan = null)
        {
            parent::__construct('penjualan');
            $this->id_penjualan = $id_penjualan;
            $this->jumlah_penjualan = $jumlah_penjualan;
            $this->harga_jual = $harga_jual;
            $this->id_barang = $id_barang;
            $this->id_pelanggan = $id_pelanggan;
        }

        public function store($id_penjualan, $jumlah_penjualan, $harga_jual, $id_barang, $id_pelanggan)
        {
            global $connect;
            $query = "INSERT INTO penjualan (id_penjualan, jumlah_penjualan, harga_jual,        id_barang, id_pelanggan) 
                      VALUES ('$id_penjualan', '$jumlah_penjualan', '$harga_jual', '$id_barang', '$id_pelanggan');
            ";

            mysqli_query($connect, $query);
        }

        public function fetchSingle($id_penjualan)
        {
            global $connect;
            $query = "SELECT * FROM penjualan WHERE id_penjualan = '$id_penjualan' LIMIT 1;";

            mysqli_query($connect, $query);
        }

        public function update($id_penjualan, $jumlah_penjualan, $harga_jual, $id_barang, $id_pelanggan)
        {
            global $connect;
            $query = "UPDATE penjualan
                      SET 
                        jumlah_penjualan = '$jumlah_penjualan',
                        harga_jual = '$harga_jual',
                        id_barang = '$id_barang',
                        id_pelanggan = '$id_pelanggan'
                      WHERE id_penjualan = '$id_penjualan'

            ";
            mysqli_query($connect, $query);
        }

        public function delete($id_penjualan)
        {
            global $connect;
            $query = "DELETE FROM penjualan
                      WHERE id_penjualan = '$id_penjualan'    
            ";
            
            mysqli_query($connect, $query);
        }
    }