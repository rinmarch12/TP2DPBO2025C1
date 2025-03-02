<?php
// PetShop.php

// Mendefinisikan kelas PetShop
class PetShop {
    // Mendeklarasikan properti yang digunakan dalam kelas
    protected $id;
    protected $nama_produk;
    protected $harga_produk;
    protected $stok_produk;
    protected $foto;

    // Konstruktor default untuk menginisialisasi properti
    public function __construct($id = "", $nama_produk = "", $harga_produk = 0, $stok_produk = 0, $foto = "") {
        $this->id = $id;
        $this->nama_produk = $nama_produk;
        $this->harga_produk = $harga_produk;
        $this->stok_produk = $stok_produk;
        $this->foto = $foto;
    }

    // Metode untuk mengatur nilai ID
    public function setId($id) {
        $this->id = $id;
    }
    
    // Metode untuk mendapatkan nilai ID
    public function getId() {
        return $this->id;
    }

    // Metode untuk mengatur nama produk
    public function setNamaProduk($nama_produk) {
        $this->nama_produk = $nama_produk;
    }
    
    // Metode untuk mendapatkan nama produk
    public function getNamaProduk() {
        return $this->nama_produk;
    }

    // Metode untuk mengatur harga produk
    public function setHargaProduk($harga_produk) {
        $this->harga_produk = $harga_produk;
    }

    // Metode untuk mendapatkan harga produk
    public function getHargaProduk() {
        return $this->harga_produk;
    }

    // Metode untuk mengatur stok produk
    public function setStokProduk($stok_produk) {
        $this->stok_produk = $stok_produk;
    }

    // Metode untuk mendapatkan stok produk
    public function getStokProduk() {
        return $this->stok_produk;
    }

    // Metode untuk mengatur foto produk
    public function setFoto($foto) {
        $this->foto = $foto;
    }
    
    // Metode untuk mendapatkan foto produk
    public function getFoto() {
        return $this->foto;
    }

    // Metode untuk menampilkan informasi produk dalam format yang terstruktur
    public function display($id_max, $nama_max, $harga_max, $stok_max, $foto_max = null) {
        // Menampilkan ID produk dan menyesuaikan lebar tampilan
        echo $this->id . str_repeat(" ", $id_max - strlen($this->id))
            . $this->nama_produk . str_repeat(" ", $nama_max - strlen($this->nama_produk))
            . $this->harga_produk . str_repeat(" ", $harga_max - strlen((string)$this->harga_produk))
            . $this->stok_produk . str_repeat(" ", $stok_max - strlen((string)$this->stok_produk));
        
        // Jika foto_max disediakan, maka akan menampilkan foto produk
        if ($foto_max !== null) {
            echo $this->foto . str_repeat(" ", $foto_max - strlen($this->foto));
        }
    }
}
?>
