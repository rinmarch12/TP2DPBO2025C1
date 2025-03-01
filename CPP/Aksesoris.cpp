#include <iostream>
#include <string>
#include <iomanip>
using namespace std;
#include "PetShop.cpp" // Mengimpor file header PetShop.cpp

// Kelas Aksesoris yang merupakan turunan dari kelas PetShop
class Aksesoris : public PetShop {
private:
    string jenis; // Jenis aksesoris
    string bahan; // Bahan aksesoris
    string warna; // Warna aksesoris

public:
    // Constructor default
    Aksesoris() : PetShop(), jenis(""), bahan(""), warna("") {}

    // Constructor dengan parameter untuk menginisialisasi atribut, termasuk dari kelas PetShop
    Aksesoris(string id, string nama_produk, int harga_produk, int stok_produk, string jenis, string bahan, string warna)
        : PetShop(id, nama_produk, harga_produk, stok_produk) {
        this->jenis = jenis;   // Mengatur jenis aksesoris
        this->bahan = bahan;   // Mengatur bahan aksesoris
        this->warna = warna;   // Mengatur warna aksesoris
    }

    // Setter untuk jenis aksesoris
    void setJenis(string jenis) { 
        this->jenis = jenis; 
    }

    // Getter untuk mendapatkan jenis aksesoris
    string getJenis() { 
        return jenis; 
    }

    // Getter untuk mendapatkan bahan aksesoris
    string getBahan() { 
        return bahan; 
    }

    // Setter untuk bahan aksesoris
    void setBahan(string bahan) { 
        this->bahan = bahan; 
    }

    // Setter untuk warna aksesoris
    void setWarna(string warna) { 
        this->warna = warna; 
    }

    // Getter untuk mendapatkan warna aksesoris
    string getWarna() { 
        return warna; 
    }

    // Method display untuk menampilkan informasi aksesoris dengan tambahan atribut baru
    void display(int id_max, int nama_max, int harga_max, int stok_max, int jenis_max, int bahan_max, int warna_max) {
        // Memanggil method display dari kelas induk (PetShop) untuk menampilkan atribut dasar
        PetShop::display(id_max, nama_max, harga_max, stok_max);
        
        // Menampilkan atribut tambahan milik Aksesoris dengan format yang rapi
        cout << jenis << string(jenis_max - jenis.size(), ' ')
             << bahan << string(bahan_max - bahan.size(), ' ')
             << warna << string(warna_max - warna.size(), ' ');
    }
};
