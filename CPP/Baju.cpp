#include <iostream>
#include <string>
#include <iomanip>
using namespace std;
#include "Aksesoris.cpp" // Mengimpor file "Aksesoris.cpp" karena kelas Baju merupakan turunan dari Aksesoris

// Kelas Baju yang merupakan turunan dari kelas Aksesoris
class Baju : public Aksesoris {
private:
    string untuk; 
    string size;  
    string merk;  

public:
    // Constructor default
    Baju() : Aksesoris(), untuk(""), size(""), merk("") {}

    // Constructor parameter untuk menginisialisasi semua atribut, termasuk dari kelas Aksesoris dan PetShop
    Baju(string id, string nama_produk, int harga_produk, int stok_produk,
         string jenis, string bahan, string warna,
         string untuk, string size, string merk)
        : Aksesoris(id, nama_produk, harga_produk, stok_produk, jenis, bahan, warna) {
        this->untuk = untuk; 
        this->size = size;   
        this->merk = merk;
    }

    // Setter untuk mengatur baju untuk siapa
    void setUntuk(string untuk) { 
        this->untuk = untuk; 
    }
    
    // Getter untuk mendapatkan informasi baju untuk siapa
    string getUntuk() { 
        return untuk; 
    }
    
    // Setter untuk mengatur ukuran baju
    void setSize(string size) { 
        this->size = size; 
    }

    // Getter untuk mendapatkan ukuran baju
    string getSize() { 
        return size; 
    }

    // Setter untuk mengatur merek baju
    void setMerk(string merk) { 
        this->merk = merk; 
    }

    // Getter untuk mendapatkan merek baju
    string getMerk() { 
        return merk; 
    }

    // Method untuk menampilkan informasi produk baju dengan atribut tambahan
    void display(int id_max, int nama_max, int harga_max, int stok_max, 
                 int jenis_max, int bahan_max, int warna_max, 
                 int untuk_max, int size_max, int merk_max) {
        // Memanggil method display dari kelas induk (Aksesoris) untuk menampilkan atribut dasar
        Aksesoris::display(id_max, nama_max, harga_max, stok_max, jenis_max, bahan_max, warna_max);
        
        // Menampilkan atribut tambahan spesifik untuk baju dengan format yang rapi
        cout << untuk << string(untuk_max - untuk.size(), ' ')  
             << size << string(size_max - size.size(), ' ')    
             << merk << string(merk_max - merk.size(), ' ')  
             << endl;
    }
};
