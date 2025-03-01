import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        // Membuat list untuk menyimpan objek Baju
        List<Baju> listBaju = new ArrayList<>();

        // Menambahkan data awal ke dalam list
        listBaju.add(new Baju("B001", "Baju Anjing", 150000, 10, "Pakaian", "Katun", "Merah", "Anjing", "M", "PawStyle"));
        listBaju.add(new Baju("B002", "Baju Kucing", 120000, 5, "Pakaian", "Denim", "Biru", "Kucing", "S", "MeowFashion"));
        listBaju.add(new Baju("B003", "Jaket Kucing", 175000, 7, "Jaket", "Wol", "Hitam", "Kucing", "L", "FurryCoat"));
        listBaju.add(new Baju("B004", "Baju Hamster", 90000, 15, "Pakaian", "Satin", "Pink", "Hamster", "XXXS", "TinyWear"));
        listBaju.add(new Baju("B005", "Sweater Anjing", 200000, 8, "Sweater", "Rajut", "Coklat", "Anjing", "XL", "WarmPaws"));

        // Menampilkan data awal
        System.out.println("\nDATA PRODUK PETSHOP:");
        tampilkanData(listBaju);
        
        // Membaca input jumlah data yang ingin ditambahkan
        Scanner scanner = new Scanner(System.in);
        System.out.print("\nMasukkan jumlah data baru: ");
        int n = scanner.nextInt();
        scanner.nextLine(); // Membersihkan buffer

        System.out.println();
        
        // Loop untuk menambahkan data baru sebanyak 'n' kali
        for (int i = 0; i < n; i++) {
            String id;
            while (true) {
                System.out.print("Masukkan ID: ");
                id = scanner.nextLine();
                boolean found = false;

                // Mengecek apakah ID sudah digunakan sebelumnya
                for (Baju baju : listBaju) {
                    if (baju.getId().equals(id)) {
                        found = true;
                        System.out.println("ID sudah digunakan! Masukkan ID lain.");
                        System.out.println();
                        break;
                    }
                }
                if (!found) break;
            }

            // Membaca input atribut produk baru
            System.out.print("Masukkan Nama Produk: ");
            String namaProduk = scanner.nextLine();
            System.out.print("Masukkan Harga: ");
            int hargaProduk = scanner.nextInt();
            System.out.print("Masukkan Stok: ");
            int stokProduk = scanner.nextInt();
            scanner.nextLine(); // Membersihkan buffer
            System.out.print("Masukkan Jenis: ");
            String jenis = scanner.nextLine();
            System.out.print("Masukkan Bahan: ");
            String bahan = scanner.nextLine();
            System.out.print("Masukkan Warna: ");
            String warna = scanner.nextLine();
            System.out.print("Masukkan Untuk: ");
            String untuk = scanner.nextLine();
            System.out.print("Masukkan Size: ");
            String size = scanner.nextLine();
            System.out.print("Masukkan Merk: ");
            String merk = scanner.nextLine();

            // Menambahkan objek Baju baru ke dalam list
            listBaju.add(new Baju(id, namaProduk, hargaProduk, stokProduk, jenis, bahan, warna, untuk, size, merk));
        }

        scanner.close(); // Menutup scanner
        
        // Menampilkan data setelah ditambah
        System.out.println("\nDATA SETELAH DITAMBAH:");
        tampilkanData(listBaju);
    }

    // Method untuk menampilkan data dalam format tabel
    public static void tampilkanData(List<Baju> listBaju) {
        // Header tabel
        String[] headers = {"ID", "Nama Produk", "Harga", "Stok", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk"};
        
        // Array untuk menyimpan panjang maksimal setiap kolom
        int[] maxLengths = new int[headers.length];
        
        // Inisialisasi panjang kolom berdasarkan header
        for (int i = 0; i < headers.length; i++) {
            maxLengths[i] = headers[i].length();
        }

        // Menentukan panjang maksimal untuk setiap kolom berdasarkan data dalam list
        for (Baju baju : listBaju) {
            maxLengths[0] = Math.max(maxLengths[0], baju.getId().length());
            maxLengths[1] = Math.max(maxLengths[1], baju.getNamaProduk().length());
            maxLengths[2] = Math.max(maxLengths[2], String.valueOf(baju.getHargaProduk()).length());
            maxLengths[3] = Math.max(maxLengths[3], String.valueOf(baju.getStokProduk()).length());
            maxLengths[4] = Math.max(maxLengths[4], baju.getJenis().length());
            maxLengths[5] = Math.max(maxLengths[5], baju.getBahan().length());
            maxLengths[6] = Math.max(maxLengths[6], baju.getWarna().length());
            maxLengths[7] = Math.max(maxLengths[7], baju.getUntuk().length());
            maxLengths[8] = Math.max(maxLengths[8], baju.getSize().length());
            maxLengths[9] = Math.max(maxLengths[9], baju.getMerk().length());
        }

        // Menghitung total panjang tabel
        int totalLength = 0;
        for (int length : maxLengths) {
            totalLength += length + 3;
        }

        // Mencetak garis pemisah tabel
        System.out.print("=");
        for (int i = 1; i < totalLength + 1; i++) {
            System.out.print("=");
        }
        System.out.println();
        
        // Mencetak header tabel
        System.out.print("| ");
        for (int i = 0; i < headers.length; i++) {
            System.out.printf("%-" + maxLengths[i] + "s | ", headers[i]);
        }
        System.out.println();

        // Mencetak garis pemisah antara header dan data
        System.out.print("=");
        for (int i = 1; i < totalLength + 1; i++) {
            System.out.print("=");
        }
        System.out.println();

        // Mencetak isi data dalam tabel
        for (Baju baju : listBaju) {
            System.out.print("| ");
            System.out.printf("%-" + maxLengths[0] + "s | ", baju.getId());
            System.out.printf("%-" + maxLengths[1] + "s | ", baju.getNamaProduk());
            System.out.printf("%-" + maxLengths[2] + "d | ", baju.getHargaProduk());
            System.out.printf("%-" + maxLengths[3] + "d | ", baju.getStokProduk());
            System.out.printf("%-" + maxLengths[4] + "s | ", baju.getJenis());
            System.out.printf("%-" + maxLengths[5] + "s | ", baju.getBahan());
            System.out.printf("%-" + maxLengths[6] + "s | ", baju.getWarna());
            System.out.printf("%-" + maxLengths[7] + "s | ", baju.getUntuk());
            System.out.printf("%-" + maxLengths[8] + "s | ", baju.getSize());
            System.out.printf("%-" + maxLengths[9] + "s | ", baju.getMerk());
            System.out.println();
        }

        // Mencetak garis pemisah setelah data
        System.out.print("=");
        for (int i = 1; i < totalLength + 1; i++) {
            System.out.print("=");
        }
        System.out.println();
    }
}
