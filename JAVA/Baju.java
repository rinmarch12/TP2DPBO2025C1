// Kelas Baju merupakan subclass dari Aksesoris
public class Baju extends Aksesoris {
    // Deklarasi atribut tambahan khusus untuk baju
    private String untuk; // Jenis hewan yang menggunakan baju (misal: anjing, kucing)
    private String size;  // Ukuran baju (S, M, L, XL)
    private String merk;  // Merk baju

    // Constructor default untuk menginisialisasi atribut dengan nilai awal kosong
    public Baju() {
        super(); // Memanggil constructor default dari superclass (Aksesoris)
        this.untuk = "";
        this.size = "";
        this.merk = "";
    }

    // Constructor dengan parameter untuk mengisi semua atribut saat objek dibuat
    public Baju(String id, String namaProduk, int hargaProduk, int stokProduk, 
                String jenis, String bahan, String warna, 
                String untuk, String size, String merk) {
        super(id, namaProduk, hargaProduk, stokProduk, jenis, bahan, warna); // Memanggil constructor superclass
        this.untuk = untuk; // Mengisi atribut 'untuk' sesuai parameter
        this.size = size;   // Mengisi atribut 'size' sesuai parameter
        this.merk = merk;   // Mengisi atribut 'merk' sesuai parameter
    }

    // Getter untuk mendapatkan nilai atribut 'untuk'
    public String getUntuk() {
        return untuk;
    }

    // Setter untuk mengubah nilai atribut 'untuk'
    public void setUntuk(String untuk) {
        this.untuk = untuk;
    }

    // Getter untuk mendapatkan nilai atribut 'size'
    public String getSize() {
        return size;
    }

    // Setter untuk mengubah nilai atribut 'size'
    public void setSize(String size) {
        this.size = size;
    }

    // Getter untuk mendapatkan nilai atribut 'merk'
    public String getMerk() {
        return merk;
    }

    // Setter untuk mengubah nilai atribut 'merk'
    public void setMerk(String merk) {
        this.merk = merk;
    }

    // Overriding method display untuk menampilkan informasi produk baju
    public void display(int idMax, int namaMax, int hargaMax, int stokMax, 
                        int jenisMax, int bahanMax, int warnaMax, 
                        int untukMax, int sizeMax, int merkMax) {
        super.display(idMax, namaMax, hargaMax, stokMax, jenisMax, bahanMax, warnaMax); // Memanggil method display dari superclass
        System.out.printf("%-" + untukMax + "s %-" + sizeMax + "s %-" + merkMax + "s\n", untuk, size, merk); // Menampilkan atribut tambahan khusus baju
    }
}
