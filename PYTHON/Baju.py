from Aksesoris import Aksesoris  # Mengimpor kelas induk Aksesoris

class Baju(Aksesoris):  # Membuat subclass Baju yang mewarisi Aksesoris
    
    def __init__(self, id="", nama_produk="", harga_produk=0, stok_produk=0, jenis="", bahan="", warna="", untuk="", size="", merk=""):
        super().__init__(id, nama_produk, harga_produk, stok_produk, jenis, bahan, warna)  # Memanggil konstruktor kelas induk
        # Konstruktor untuk menginisialisasi atribut dengan nilai default
        self.set_untuk(untuk) 
        self.set_size(size)  
        self.set_merk(merk)  

    def set_untuk(self, untuk):
        self._untuk = untuk  # Menyimpan kategori pengguna baju
    
    def get_untuk(self):
        return self._untuk  # Mengembalikan kategori pengguna baju

    def set_size(self, size):
        self._size = size  # Menyimpan ukuran baju
    
    def get_size(self):
        return self._size  # Mengembalikan ukuran baju
    
    def set_merk(self, merk):
        self._merk = merk  # Menyimpan merk baju
    
    def get_merk(self):
        return self._merk  # Mengembalikan merk baju
    
    def display(self, untuk_max, size_max, merk_max):
        # Menampilkan data produk dengan format yang rapi berdasarkan panjang maksimal kolom
        print(
            self._untuk + " " * (untuk_max - len(self._untuk)),
            self._size + " " * (size_max - len(self._size)),
            self._merk + " " * (merk_max - len(self._merk)),
        )
