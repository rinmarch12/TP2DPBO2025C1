<?php

// Mengimpor file Aksesoris.php agar dapat menggunakan kelas Aksesoris sebagai parent class
include ("Aksesoris.php");

// Mendefinisikan kelas Baju yang merupakan turunan dari kelas Aksesoris
class Baju extends Aksesoris {
    // Mendeklarasikan properti tambahan yang dimiliki oleh Baju
    private $untuk; // Menyimpan informasi apakah baju untuk anjing, kucing, dll.
    private $size;  // Ukuran baju (S, M, L, XL)
    private $merk;  // Merek baju

    // Konstruktor default untuk menginisialisasi properti
    public function __construct($id = "", $nama_produk = "", $harga_produk = 0, $stok_produk = 0, $foto = "",
                              $jenis = "", $bahan = "", $warna = "",
                              $untuk = "", $size = "", $merk = "") {
        // Memanggil konstruktor dari kelas induk (Aksesoris) untuk mengatur properti yang diwarisi
        parent::__construct($id, $nama_produk, $harga_produk, $stok_produk, $foto, $jenis, $bahan, $warna);

        // Menginisialisasi properti khusus dari kelas Baju
        $this->untuk = $untuk;
        $this->size = $size;
        $this->merk = $merk;
    }

    // Metode untuk mengatur siapa yang menggunakan baju ini (anjing, kucing, dll.)
    public function setUntuk($untuk) {
        $this->untuk = $untuk;
    }
    
    // Metode untuk mendapatkan siapa yang menggunakan baju ini
    public function getUntuk() {
        return $this->untuk;
    }
    
    // Metode untuk mengatur ukuran baju
    public function setSize($size) {
        $this->size = $size;
    }

    // Metode untuk mendapatkan ukuran baju
    public function getSize() {
        return $this->size;
    }

    // Metode untuk mengatur merek baju
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    // Metode untuk mendapatkan merek baju
    public function getMerk() {
        return $this->merk;
    }

    // Metode display() dari kelas induk untuk menampilkan informasi lengkap tentang baju
    public function display($id_max, $nama_max, $harga_max, $stok_max, $foto_max = null, $jenis_max = null, $bahan_max = null, $warna_max = null, $untuk_max = null, $size_max = null, $merk_max = null) {
        // Menentukan apakah harus memanggil metode display() dari PetShop atau Aksesoris
        if ($jenis_max === null) {
            // Jika hanya parameter dasar yang diberikan, panggil display() dari PetShop
            parent::display($id_max, $nama_max, $harga_max, $stok_max, $foto_max);
        } else {
            // Jika parameter untuk Aksesoris juga diberikan, panggil display() dari Aksesoris
            parent::display($id_max, $nama_max, $harga_max, $stok_max, $foto_max, $jenis_max, $bahan_max, $warna_max);
        }
        
        // Menampilkan atribut tambahan dari Baju jika parameter untuknya diberikan
        if ($untuk_max !== null && $size_max !== null && $merk_max !== null) {
            echo $this->untuk . str_repeat(" ", $untuk_max - strlen($this->untuk))
                . $this->size . str_repeat(" ", $size_max - strlen($this->size))
                . $this->merk . str_repeat(" ", $merk_max - strlen($this->merk))
                . PHP_EOL; // Menambahkan baris baru setelah semua atribut Baju ditampilkan
        }
    }
}
?>
