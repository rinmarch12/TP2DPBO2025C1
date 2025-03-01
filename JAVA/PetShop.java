public class PetShop {
    // Deklarasi atribut untuk menyimpan informasi produk
    protected String id;           
    protected String namaProduk;   
    protected int hargaProduk;     
    protected int stokProduk;      

    // Constructor default untuk inisialisasi atribut dengan nilai awal
    public PetShop() {
        this.id = "";              // Inisialisasi ID dengan string kosong
        this.namaProduk = "";      // Inisialisasi nama produk dengan string kosong
        this.hargaProduk = 0;      // Inisialisasi harga dengan nilai 0
        this.stokProduk = 0;       // Inisialisasi stok dengan nilai 0
    }

    // Constructor dengan parameter untuk mengisi nilai atribut saat objek dibuat
    public PetShop(String id, String namaProduk, int hargaProduk, int stokProduk) {
        this.id = id;
        this.namaProduk = namaProduk;
        this.hargaProduk = hargaProduk;
        this.stokProduk = stokProduk;
    }

    // Getter untuk mendapatkan nilai atribut id
    public String getId() {
        return id;
    }

    // Setter untuk mengubah nilai atribut id
    public void setId(String id) {
        this.id = id;
    }

    // Getter untuk mendapatkan nilai atribut namaProduk
    public String getNamaProduk() {
        return namaProduk;
    }

    // Setter untuk mengubah nilai atribut namaProduk
    public void setNamaProduk(String namaProduk) {
        this.namaProduk = namaProduk;
    }

    // Getter untuk mendapatkan nilai atribut hargaProduk
    public int getHargaProduk() {
        return hargaProduk;
    }

    // Setter untuk mengubah nilai atribut hargaProduk
    // Bisa ditambahkan validasi agar harga tidak negatif
    public void setHargaProduk(int hargaProduk) {
        if (hargaProduk >= 0) { // Validasi agar harga tidak negatif
            this.hargaProduk = hargaProduk;
        } else {
            System.out.println("Harga produk tidak boleh negatif!");
        }
    }

    // Getter untuk mendapatkan nilai atribut stokProduk
    public int getStokProduk() {
        return stokProduk;
    }

    // Setter untuk mengubah nilai atribut stokProduk
    // Bisa ditambahkan validasi agar stok tidak negatif
    public void setStokProduk(int stokProduk) {
        if (stokProduk >= 0) { // Validasi agar stok tidak negatif
            this.stokProduk = stokProduk;
        } else {
            System.out.println("Stok produk tidak boleh negatif!");
        }
    }

    // Method untuk menampilkan informasi produk dalam format tabel
    public void display(int idMax, int namaMax, int hargaMax, int stokMax) {
        // Menampilkan data produk dengan format lebar kolom yang ditentukan
        System.out.printf("%-" + idMax + "s %-" + namaMax + "s %-" + hargaMax + "d %-" + stokMax + "d\n", 
                          id, namaProduk, hargaProduk, stokProduk);
    }
}
