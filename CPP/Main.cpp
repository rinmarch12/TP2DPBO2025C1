#include <iostream>
#include <vector>
#include <iomanip>
using namespace std;
#include "Baju.cpp"

int main() {
    // Inisialisasi daftar baju dalam vektor
    vector<Baju> list_Baju = {
        Baju("B001", "Baju Anjing", 150000, 10, "Pakaian", "Katun", "Merah", "Anjing", "M", "PawStyle"),
        Baju("B002", "Baju Kucing", 120000, 5, "Pakaian", "Denim", "Biru", "Kucing", "S", "MeowFashion"),
        Baju("B003", "Jaket Kucing", 175000, 7, "Jaket", "Wol", "Hitam", "Kucing", "L", "FurryCoat"),
        Baju("B004", "Baju Hamster", 90000, 15, "Pakaian", "Satin", "Pink", "Hamster", "XXXS", "TinyWear"),
        Baju("B005", "Sweater Anjing", 200000, 8, "Sweater", "Rajut", "Coklat", "Anjing", "XL", "WarmPaws")
    };

    cout << "\nDATA PRODUK PETSHOP:\n";

    // Menentukan panjang maksimum setiap kolom untuk tampilan tabel
    int id_max = 2, nama_max = 11, harga_max = 5, stok_max = 4;
    int jenis_max = 5, bahan_max = 5, warna_max = 5, untuk_max = 5, size_max = 4, merk_max = 4;

    // Menyesuaikan panjang kolom dengan data yang ada
    for (Baju& baju : list_Baju) {
        id_max = max(id_max, (int)baju.getId().size());
        nama_max = max(nama_max, (int)baju.getNamaProduk().size());
        harga_max = max(harga_max, (int)to_string(baju.getHargaProduk()).size());
        stok_max = max(stok_max, (int)to_string(baju.getStokProduk()).size());
        jenis_max = max(jenis_max, (int)baju.getJenis().size());
        bahan_max = max(bahan_max, (int)baju.getBahan().size());
        warna_max = max(warna_max, (int)baju.getWarna().size());
        untuk_max = max(untuk_max, (int)baju.getUntuk().size());
        size_max = max(size_max, (int)baju.getSize().size());
        merk_max = max(merk_max, (int)baju.getMerk().size());
    }

    // Menampilkan tabel daftar produk awal
    int total_length = id_max + nama_max + harga_max + stok_max + jenis_max + bahan_max + warna_max + untuk_max + size_max + merk_max + 31;
    cout << string(total_length, '=') << endl;
    cout << left 
         << "| " << setw(id_max) << "ID" << " | "
         << setw(nama_max) << "Nama Produk" << " | "
         << setw(harga_max) << "Harga" << " | "
         << setw(stok_max) << "Stok" << " | "
         << setw(jenis_max) << "Jenis" << " | "
         << setw(bahan_max) << "Bahan" << " | "
         << setw(warna_max) << "Warna" << " | "
         << setw(untuk_max) << "Untuk" << " | "
         << setw(size_max) << "Size" << " | "
         << setw(merk_max) << "Merk" << " | "
         << endl;
    cout << string(total_length, '=') << endl;

    // Menampilkan data produk yang ada
    for (Baju& baju : list_Baju) {
        cout << "| " << setw(id_max) << baju.getId() << " | "
             << setw(nama_max) << baju.getNamaProduk() << " | "
             << setw(harga_max) << baju.getHargaProduk() << " | "
             << setw(stok_max) << baju.getStokProduk() << " | "
             << setw(jenis_max) << baju.getJenis() << " | "
             << setw(bahan_max) << baju.getBahan() << " | "
             << setw(warna_max) << baju.getWarna() << " | "
             << setw(untuk_max) << baju.getUntuk() << " | "
             << setw(size_max) << baju.getSize() << " | "
             << setw(merk_max) << baju.getMerk() << " | "
             << endl;
    }
    cout << string(total_length, '=') << endl;

    // Menambahkan data baru ke daftar produk
    int n;
    cout << "\nMasukkan jumlah data baru: ";
    cin >> n;
    cin.ignore();

    for (int i = 0; i < n; i++) {
        string id, nama_produk, jenis, bahan, warna, untuk, size, merk;
        int harga_produk, stok_produk;

        // Memastikan ID unik sebelum menambahkan produk baru
        int found;
        do {
            cout << "\nMasukkan ID: ";
            cin >> id;
            cin.ignore();

            found = 0;
            for (Baju& baju : list_Baju) {
                if (baju.getId() == id) {
                    found = 1;
                    cout << "ID sudah digunakan! Masukkan ID lain.\n";
                }
            }
        } while (found == 1);  // loop akan terus berjalan jika ID sudah digunakan

        // Menerima input dari pengguna
        cout << "Masukkan Nama Produk: ";
        getline(cin, nama_produk);
        cout << "Masukkan Harga: ";
        cin >> harga_produk;
        cout << "Masukkan Stok: ";
        cin >> stok_produk;
        cin.ignore();
        cout << "Masukkan Jenis: ";
        getline(cin, jenis);
        cout << "Masukkan Bahan: ";
        getline(cin, bahan);
        cout << "Masukkan Warna: ";
        getline(cin, warna);
        cout << "Masukkan Untuk: ";
        getline(cin, untuk);
        cout << "Masukkan Size: ";
        getline(cin, size);
        cout << "Masukkan Merk: ";
        getline(cin, merk);

        // Menambahkan produk baru ke dalam vektor
        list_Baju.push_back(Baju(id, nama_produk, harga_produk, stok_produk, jenis, bahan, warna, untuk, size, merk));
    }

    // Hitung ulang panjang maksimal setiap kolom setelah penambahan data
    for (Baju& baju : list_Baju) {
        id_max = max(id_max, (int)baju.getId().size());
        nama_max = max(nama_max, (int)baju.getNamaProduk().size());
        harga_max = max(harga_max, (int)to_string(baju.getHargaProduk()).size());
        stok_max = max(stok_max, (int)to_string(baju.getStokProduk()).size());
        jenis_max = max(jenis_max, (int)baju.getJenis().size());
        bahan_max = max(bahan_max, (int)baju.getBahan().size());
        warna_max = max(warna_max, (int)baju.getWarna().size());
        untuk_max = max(untuk_max, (int)baju.getUntuk().size());
        size_max = max(size_max, (int)baju.getSize().size());
        merk_max = max(merk_max, (int)baju.getMerk().size());
    }

    // Menampilkan tabel produk setelah penambahan data
    total_length = id_max + nama_max + harga_max + stok_max + jenis_max + bahan_max + warna_max + untuk_max + size_max + merk_max + 31;

    cout << "\nDATA SETELAH DITAMBAH:\n";
    cout << string(total_length, '=') << endl;
    cout << left 
         << "| " << setw(id_max) << "ID" << " | "
         << setw(nama_max) << "Nama Produk" << " | "
         << setw(harga_max) << "Harga" << " | "
         << setw(stok_max) << "Stok" << " | "
         << setw(jenis_max) << "Jenis" << " | "
         << setw(bahan_max) << "Bahan" << " | "
         << setw(warna_max) << "Warna" << " | "
         << setw(untuk_max) << "Untuk" << " | "
         << setw(size_max) << "Size" << " | "
         << setw(merk_max) << "Merk" << " | "
         << endl;
    cout << string(total_length, '=') << endl;

    for (Baju& baju : list_Baju) {
        cout << "| " << setw(id_max) << baju.getId() << " | "
             << setw(nama_max) << baju.getNamaProduk() << " | "
             << setw(harga_max) << baju.getHargaProduk() << " | "
             << setw(stok_max) << baju.getStokProduk() << " | "
             << setw(jenis_max) << baju.getJenis() << " | "
             << setw(bahan_max) << baju.getBahan() << " | "
             << setw(warna_max) << baju.getWarna() << " | "
             << setw(untuk_max) << baju.getUntuk() << " | "
             << setw(size_max) << baju.getSize() << " | "
             << setw(merk_max) << baju.getMerk() << " | "
             << endl;
    }
    cout << string(total_length, '=') << endl;

    return 0;
}