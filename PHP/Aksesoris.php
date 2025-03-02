<?php

// Mengimpor file PetShop.php agar dapat menggunakan kelas PetShop sebagai parent class
include ("PetShop.php");

// Mendefinisikan kelas Aksesoris yang merupakan turunan dari kelas PetShop
class Aksesoris extends PetShop {
    // Mendeklarasikan properti tambahan yang dimiliki oleh Aksesoris
    private $jenis;
    private $bahan;
    private $warna;

    // Konstruktor default untuk menginisialisasi properti
    public function __construct($id = "", $nama_produk = "", $harga_produk = 0, $stok_produk = 0, $foto = "",
                               $jenis = "", $bahan = "", $warna = "") {
        // Memanggil konstruktor dari kelas induk (PetShop) untuk mengatur properti yang diwarisi
        parent::__construct($id, $nama_produk, $harga_produk, $stok_produk, $foto);

        // Menginisialisasi properti khusus dari kelas Aksesoris
        $this->jenis = $jenis;
        $this->bahan = $bahan;
        $this->warna = $warna;
    }

    // Metode untuk mengatur jenis aksesoris
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    // Metode untuk mendapatkan jenis aksesoris
    public function getJenis() {
        return $this->jenis;
    }

    // Metode untuk mengatur bahan aksesoris
    public function setBahan($bahan) {
        $this->bahan = $bahan;
    }

    // Metode untuk mendapatkan bahan aksesoris
    public function getBahan() {
        return $this->bahan;
    }

    // Metode untuk mengatur warna aksesoris
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // Metode untuk mendapatkan warna aksesoris
    public function getWarna() {
        return $this->warna;
    }

    // Metode display() dari kelas induk untuk menampilkan informasi aksesoris
    public function display($id_max, $nama_max, $harga_max, $stok_max, $foto_max = null, $jenis_max = null, $bahan_max = null, $warna_max = null) {
        // Memanggil metode display() dari kelas induk untuk menampilkan informasi dasar produk
        parent::display($id_max, $nama_max, $harga_max, $stok_max, $foto_max);
        
        // Menampilkan informasi tambahan jika parameter maksimal untuk atribut tambahan diberikan
        if ($jenis_max !== null && $bahan_max !== null && $warna_max !== null) {
            echo $this->jenis . str_repeat(" ", $jenis_max - strlen($this->jenis))
                 . $this->bahan . str_repeat(" ", $bahan_max - strlen($this->bahan))
                 . $this->warna . str_repeat(" ", $warna_max - strlen($this->warna));
        }
    }    
}
?>
