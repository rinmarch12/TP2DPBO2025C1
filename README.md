Janji
---
Saya Ririn Marchelina dengan NIM 2303662 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

----
Diagram
---
![TP2 drawio](https://github.com/user-attachments/assets/008f6d9e-d33e-459d-a370-0b9ce1092d0c)

----
Desain Program
---
Terdiri dari 3 class yaitu PetShop, Aksesoris, dan Baju. Aksesoris adalah child dari PetShop, sedangkan Baju adalah child dari Aksesoris. PetShop berisi atribut umum untuk semua produk di toko hewan peliharaan, seperti id, nama_produk, harga_produk, stok_produk, dan foto, serta memiliki metode setter dan getter untuk setiap atribut dan display() untuk menampilkan informasi produk. Aksesoris menambahkan atribut jenis, bahan, dan warna, serta metode setter dan getter dan display() untuk menampilkan informasi aksesori. Baju menambahkan atribut untuk, size, dan merk, serta metode setter dan getter dan display() untuk menampilkan informasi pakaian.

----
Alur Program
---
1. Inisialisasi Data:
Program dimulai dengan membuat daftar produk baju (dalam hal ini, baju untuk hewan peliharaan) yang sudah ada, menggunakan objek Baju. Setiap objek Baju memiliki atribut seperti ID, nama produk, harga, stok, jenis, bahan, warna, untuk hewan, ukuran, dan merek.
2. Menampilkan Data Awal:
Setelah menginisialisasi data, program menampilkan tabel yang berisi informasi dari semua produk baju yang ada. Tabel ini mencakup kolom-kolom seperti ID, nama produk, harga, stok, jenis, bahan, warna, untuk, ukuran, dan merek.
Panjang kolom dihitung berdasarkan panjang string terpanjang untuk setiap atribut.
3. Input Pengguna untuk Menambahkan Data Baru:
Program meminta pengguna untuk memasukkan jumlah data baru yang ingin ditambahkan.
Untuk setiap produk baru, pengguna diminta untuk memasukkan ID dan memastikan bahwa ID tersebut belum ada dalam daftar. Jika ID sudah digunakan, pengguna diminta untuk memasukkan ID lain.
Pengguna kemudian mengisi detail produk lainnya (nama produk, harga, stok, jenis, bahan, warna, untuk, ukuran, dan merek).
4. Menampilkan Data Setelah Penambahan:
Setelah data baru ditambahkan, program menghitung ulang panjang kolom dan menampilkan tabel yang sama dengan data baru yang sudah dimasukkan.
