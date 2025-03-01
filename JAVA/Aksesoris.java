// Kelas Aksesoris merupakan turunan dari PetShop
public class Aksesoris extends PetShop {
    // Deklarasi atribut tambahan untuk aksesoris
    private String jenis;
    private String bahan;
    private String warna;

    // Constructor default untuk inisialisasi atribut dengan nilai awal
    public Aksesoris() {
        super();            // Memanggil constructor default dari superclass (PetShop)
        this.jenis = "";
        this.bahan = "";
        this.warna = "";
    }

    // Constructor dengan parameter untuk mengisi atribut saat objek dibuat
    public Aksesoris(String id, String namaProduk, int hargaProduk, int stokProduk, String jenis, String bahan, String warna) {
        super(id, namaProduk, hargaProduk, stokProduk); // Memanggil constructor superclass dengan parameter
        this.jenis = jenis;
        this.bahan = bahan;
        this.warna = warna;
    }

    // Getter untuk mengambil nilai atribut jenis
    public String getJenis() {
        return jenis;
    }

    // Setter untuk mengubah nilai atribut jenis
    public void setJenis(String jenis) {
        this.jenis = jenis;
    }

    // Getter untuk mengambil nilai atribut bahan
    public String getBahan() {
        return bahan;
    }

    // Setter untuk mengubah nilai atribut bahan
    public void setBahan(String bahan) {
        this.bahan = bahan;
    }

    // Getter untuk mengambil nilai atribut warna
    public String getWarna() {
        return warna;
    }

    // Setter untuk mengubah nilai atribut warna
    public void setWarna(String warna) {
        this.warna = warna;
    }

    // Overriding method display untuk menampilkan informasi produk aksesoris
    public void display(int idMax, int namaMax, int hargaMax, int stokMax, int jenisMax, int bahanMax, int warnaMax) {
        super.display(idMax, namaMax, hargaMax, stokMax); // Menampilkan data dari superclass
        System.out.printf("%-" + jenisMax + "s %-" + bahanMax + "s %-" + warnaMax + "s\n", jenis, bahan, warna); // Menampilkan atribut tambahan
    }
}
