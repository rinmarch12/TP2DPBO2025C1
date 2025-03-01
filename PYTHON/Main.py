from Baju import Baju  # Mengimpor kelas Baju

# Membuat daftar objek Baju dengan data awal
list_baju = [
    Baju("B001", "Baju Anjing", 150000, 10, "Pakaian", "Katun", "Merah", "Anjing", "M", "PawStyle"),
    Baju("B002", "Baju Kucing", 120000, 5, "Pakaian", "Denim", "Biru", "Kucing", "S", "MeowFashion"),
    Baju("B003", "Jaket Kucing", 175000, 7, "Jaket", "Wol", "Hitam", "Kucing", "L", "FurryCoat"),
    Baju("B004", "Baju Hamster", 90000, 15, "Pakaian", "Satin", "Pink", "Hamster", "XXXS", "TinyWear"),
    Baju("B005", "Sweater Anjing", 200000, 8, "Sweater", "Rajut", "Coklat", "Anjing", "XL", "WarmPaws")
]

# Menghitung panjang maksimum setiap kolom berdasarkan data yang ada
kolom = {
    'ID': max(2, max(len(baju.get_id()) for baju in list_baju)),
    'Nama Produk': max(11, max(len(baju.get_nama_produk()) for baju in list_baju)),
    'Harga': max(5, max(len(str(baju.get_harga_produk())) for baju in list_baju)),
    'Stok': max(4, max(len(str(baju.get_stok_produk())) for baju in list_baju)),
    'Jenis': max(5, max(len(baju.get_jenis()) for baju in list_baju)),
    'Bahan': max(5, max(len(baju.get_bahan()) for baju in list_baju)),
    'Warna': max(5, max(len(baju.get_warna()) for baju in list_baju)),
    'Untuk': max(5, max(len(baju.get_untuk()) for baju in list_baju)),
    'Size': max(4, max(len(str(baju.get_size())) for baju in list_baju)),
    'Merk': max(4, max(len(baju.get_merk()) for baju in list_baju))
}

# Menghitung total panjang tabel
total_panjang = sum(kolom.values()) + len(kolom) * 3 + 1

# Menampilkan header tabel
print("=" * total_panjang)
print("| " + " | ".join(f"{key:<{kolom[key]}}" for key in kolom) + " |")
print("=" * total_panjang)

# Menampilkan data dalam tabel
for baju in list_baju:
    print(
        "| "
        f"{baju.get_id():<{kolom['ID']}} | "
        f"{baju.get_nama_produk():<{kolom['Nama Produk']}} | "
        f"{baju.get_harga_produk():<{kolom['Harga']}} | "
        f"{baju.get_stok_produk():<{kolom['Stok']}} | "
        f"{baju.get_jenis():<{kolom['Jenis']}} | "
        f"{baju.get_bahan():<{kolom['Bahan']}} | "
        f"{baju.get_warna():<{kolom['Warna']}} | "
        f"{baju.get_untuk():<{kolom['Untuk']}} | "
        f"{baju.get_size():<{kolom['Size']}} | "
        f"{baju.get_merk():<{kolom['Merk']}} |"
    )

print("=" * total_panjang)

# Meminta input jumlah data baru dari pengguna
n = int(input("\nMasukkan jumlah data baru: "))

# Proses input dan penambahan data baru
for _ in range(n):
    while True:
        id = input("\nMasukkan ID: ")
        if any(baju.get_id() == id for baju in list_baju):  # Memeriksa apakah ID sudah digunakan
            print("ID sudah digunakan! Masukkan ID lain.")
        else:
            break
    
    # Meminta input detail produk baru
    nama_produk = input("Masukkan Nama Produk: ")
    harga_produk = int(input("Masukkan Harga: "))
    stok_produk = int(input("Masukkan Stok: "))
    jenis = input("Masukkan Jenis: ")
    bahan = input("Masukkan Bahan: ")
    warna = input("Masukkan Warna: ")
    untuk = input("Masukkan Untuk: ")
    size = input("Masukkan Size: ")
    merk = input("Masukkan Merk: ")

    # Menambahkan produk baru ke dalam list_baju
    list_baju.append(Baju(id, nama_produk, harga_produk, stok_produk, jenis, bahan, warna, untuk, size, merk))

# Menampilkan ulang tabel setelah data baru ditambahkan
print("\nDATA SETELAH DITAMBAH:")

# Menghitung kembali panjang maksimum setiap kolom setelah penambahan data
kolom = {
    'ID': max(2, max(len(baju.get_id()) for baju in list_baju)),
    'Nama Produk': max(11, max(len(baju.get_nama_produk()) for baju in list_baju)),
    'Harga': max(5, max(len(str(baju.get_harga_produk())) for baju in list_baju)),
    'Stok': max(4, max(len(str(baju.get_stok_produk())) for baju in list_baju)),
    'Jenis': max(5, max(len(baju.get_jenis()) for baju in list_baju)),
    'Bahan': max(5, max(len(baju.get_bahan()) for baju in list_baju)),
    'Warna': max(5, max(len(baju.get_warna()) for baju in list_baju)),
    'Untuk': max(5, max(len(baju.get_untuk()) for baju in list_baju)),
    'Size': max(4, max(len(str(baju.get_size())) for baju in list_baju)),
    'Merk': max(4, max(len(baju.get_merk()) for baju in list_baju))
}

# Menghitung kembali total panjang tabel setelah update
total_panjang = sum(kolom.values()) + len(kolom) * 3 + 1

# Menampilkan header tabel setelah update
print("=" * total_panjang)
print("| " + " | ".join(f"{key:<{kolom[key]}}" for key in kolom) + " |")
print("=" * total_panjang)

# Menampilkan data yang diperbarui
for baju in list_baju:
    print(
        "| "
        f"{baju.get_id():<{kolom['ID']}} | "
        f"{baju.get_nama_produk():<{kolom['Nama Produk']}} | "
        f"{baju.get_harga_produk():<{kolom['Harga']}} | "
        f"{baju.get_stok_produk():<{kolom['Stok']}} | "
        f"{baju.get_jenis():<{kolom['Jenis']}} | "
        f"{baju.get_bahan():<{kolom['Bahan']}} | "
        f"{baju.get_warna():<{kolom['Warna']}} | "
        f"{baju.get_untuk():<{kolom['Untuk']}} | "
        f"{baju.get_size():<{kolom['Size']}} | "
        f"{baju.get_merk():<{kolom['Merk']}} |"
    )

print("=" * total_panjang)
