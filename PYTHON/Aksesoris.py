from PetShop import PetShop  # Mengimpor kelas induk PetShop

class Aksesoris(PetShop):  # Membuat subclass Aksesoris yang mewarisi PetShop
    
    def __init__(self, id="", nama_produk="", harga_produk=0, stok_produk=0, jenis="", bahan="", warna=""):
        super().__init__(id, nama_produk, harga_produk, stok_produk)  # Memanggil konstruktor kelas induk
        # Konstruktor untuk menginisialisasi atribut dengan nilai default
        self.set_jenis(jenis)  
        self.set_bahan(bahan)  
        self.set_warna(warna)  

    def set_jenis(self, jenis):
        self._jenis = jenis  # Menyimpan jenis aksesoris
    
    def get_jenis(self):
        return self._jenis  # Mengembalikan jenis aksesoris

    def set_bahan(self, bahan):
        self._bahan = bahan  # Menyimpan bahan aksesoris
    
    def get_bahan(self):
        return self._bahan  # Mengembalikan bahan aksesoris
    
    def set_warna(self, warna):
        self._warna = warna  # Menyimpan warna aksesoris
    
    def get_warna(self):
        return self._warna  # Mengembalikan warna aksesoris
    
    def display(self, jenis_max, bahan_max, warna_max):
        # Menampilkan data produk dengan format yang rapi berdasarkan panjang maksimal kolom
        print(
            self._jenis + " " * (jenis_max - len(self._jenis)),
            self._bahan + " " * (bahan_max - len(self._bahan)),
            self._warna + " " * (warna_max - len(self._warna))
        )
