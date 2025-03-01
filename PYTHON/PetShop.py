class PetShop:
    
    def __init__(self, id="", nama_produk="", harga_produk=0, stok_produk=0):
        # Konstruktor untuk menginisialisasi atribut dengan nilai default
        self.set_id(id)
        self.set_nama_produk(nama_produk)
        self.set_harga_produk(harga_produk)
        self.set_stok_produk(stok_produk)

    # Mengeset nilai atribut ID
    def set_id(self, id):
        self._id = id  # Menyimpan nilai ID ke dalam atribut privat
    
    # Mengembalikan nilai atribut ID
    def get_id(self):
        return self._id  # Mengembalikan nilai ID

    # Mengeset nilai atribut nama produk
    def set_nama_produk(self, nama_produk):
        self._nama_produk = nama_produk  # Menyimpan nama produk ke dalam atribut privat
    
    # Mengembalikan nilai atribut nama produk
    def get_nama_produk(self):
        return self._nama_produk  # Mengembalikan nama produk
    
    # Mengeset nilai atribut harga produk
    def set_harga_produk(self, harga_produk):
        if harga_produk >= 0:
            self._harga_produk = harga_produk  # Menyimpan harga produk jika tidak negatif
        else:
            raise ValueError("Harga produk tidak boleh negatif.")  # Menampilkan error jika harga negatif
    
    # Mengembalikan nilai atribut harga produk
    def get_harga_produk(self):
        return self._harga_produk  # Mengembalikan harga produk
    
    # Mengeset nilai atribut stok produk
    def set_stok_produk(self, stok_produk):
        self._stok_produk = stok_produk  # Menyimpan stok produk ke dalam atribut privat
    
    # Mengembalikan nilai atribut stok produk
    def get_stok_produk(self):
        return self._stok_produk  # Mengembalikan stok produk
    
    def display(self, id_max, nama_max, harga_max, stok_max):
        # Menampilkan data produk dengan format yang rapi berdasarkan panjang maksimal kolom
        print(
            self._id + " " * (id_max - len(self._id)),
            self._nama_produk + " " * (nama_max - len(self._nama_produk)),
            str(self._harga_produk) + " " * (harga_max - len(str(self._harga_produk))),
            str(self._stok_produk) + " " * (stok_max - len(str(self._stok_produk)))
        )
