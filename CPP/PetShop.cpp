#include <iostream>
#include <string>
#include <iomanip>
using namespace std;

// Kelas PetShop untuk menyimpan informasi produk di toko hewan peliharaan
class PetShop {
protected: 
    string id;            // ID produk
    string nama_produk;   // Nama produk
    int harga_produk;     // Harga produk
    int stok_produk;      // Stok produk

public:
    // Constructor default
    PetShop() : id(""), nama_produk(""), harga_produk(0), stok_produk(0) {}

    // Constructor dengan parameter untuk menginisialisasi atribut
    PetShop(string id, string nama_produk, int harga_produk, int stok_produk) {
        this->id = id;               // Mengatur ID produk
        this->nama_produk = nama_produk; // Mengatur nama produk
        this->harga_produk = harga_produk; // Mengatur harga produk
        this->stok_produk = stok_produk;   // Mengatur stok produk
    }

    // Setter untuk ID produk
    void setId(string id) { 
        this->id = id; 
    }
    
    // Getter untuk mendapatkan ID produk
    string getId() { 
        return id; 
    }

    // Setter untuk nama produk
    void setNamaProduk(string nama_produk) { 
        this->nama_produk = nama_produk; 
    }

    // Getter untuk mendapatkan nama produk
    string getNamaProduk() { 
        return nama_produk; 
    }

    // Setter untuk harga produk
    void setHargaProduk(int harga_produk) { 
        this->harga_produk = harga_produk; 
    }

    // Getter untuk mendapatkan harga produk
    int getHargaProduk() { 
        return harga_produk; 
    }

    // Setter untuk stok produk
    void setStokProduk(int stok_produk) { 
        this->stok_produk = stok_produk; 
    }

    // Getter untuk mendapatkan stok produk
    int getStokProduk() { 
        return stok_produk; 
    }

    // Fungsi untuk menampilkan informasi produk
    void display(int id_max, int nama_max, int harga_max, int stok_max) {
        cout << id << string(id_max - id.size(), ' ') // Menampilkan ID dengan padding
             << nama_produk << string(nama_max - nama_produk.size(), ' ') // Menampilkan nama produk dengan padding
             << harga_produk << string(harga_max - to_string(harga_produk).size(), ' ') // Menampilkan harga produk dengan padding
             << stok_produk << string(stok_max - to_string(stok_produk).size(), ' '); // Menampilkan stok produk dengan padding
    }
};
