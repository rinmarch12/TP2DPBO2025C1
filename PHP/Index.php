<?php
include ("Baju.php");

$is_cli = (php_sapi_name() === 'cli');

function getDefaultProducts() {
    return [
        new Baju("B001", "Baju Anjing", 150000, 10, "Baju-Anjing.jpg", "Pakaian", "Katun", "Merah", "Anjing", "M", "PawStyle"),
        new Baju("B002", "Baju Kucing", 120000, 5, "Baju-Kucing.jpg", "Pakaian", "Denim", "Biru", "Kucing", "S", "MeowFashion"),
        new Baju("B003", "Jaket Kucing", 175000, 7, "Jaket-Kucing.jpg", "Jaket", "Wol", "Hitam", "Kucing", "L", "FurryCoat"),
        new Baju("B004", "Baju Hamster", 90000, 15, "Baju-Hamster.jpg", "Pakaian", "Satin", "Pink", "Hamster", "XXXS", "TinyWear"),
        new Baju("B005", "Sweater Anjing", 200000, 8, "Sweater-Anjing.jpg", "Sweater", "Rajut", "Coklat", "Anjing", "XL", "WarmPaws")
    ];
}

$temp_products = [];

$list_Baju = getDefaultProducts();

if (!$is_cli) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'] ?? '';
        $found = false;
        
        foreach (getDefaultProducts() as $baju) {
            if ($baju->getId() == $id) {
                $found = true;
                $id_error = "ID sudah digunakan pada produk default! Silakan gunakan ID lain.";
                break;
            }
        }
        
        if (!$found && !empty($id)) {
            $nama_produk = $_POST['nama_produk'] ?? '';
            $harga_produk = intval($_POST['harga_produk'] ?? 0);
            $stok_produk = intval($_POST['stok_produk'] ?? 0);
            $jenis = $_POST['jenis'] ?? '';
            $bahan = $_POST['bahan'] ?? '';
            $warna = $_POST['warna'] ?? '';
            $untuk = $_POST['untuk'] ?? '';
            $size = $_POST['size'] ?? '';
            $merk = $_POST['merk'] ?? '';
            
            $foto = '';
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
                $foto = $_FILES['foto']['name'];
            }
            
            $new_product = new Baju($id, $nama_produk, $harga_produk, $stok_produk, $foto, $jenis, $bahan, $warna, $untuk, $size, $merk);
            
            $list_Baju[] = $new_product;
            
            $success_message = "Produk berhasil ditambahkan!";
        }
    }
    
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Fashion Shop</title>
        <style>
            :root {
                --primary: #4a6da7;
                --secondary: #f5a742;
                --light: #f8f9fa;
                --dark: #343a40;
                --success: #28a745;
                --danger: #dc3545;
                --warning: #ffc107;
                --info: #17a2b8;
            }
            
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f0f5ff;
                color: #333;
                margin: 0;
                padding: 0;
                line-height: 1.6;
            }
            
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }
            
            header {
                background-color: var(--primary);
                color: white;
                padding: 20px 0;
                text-align: center;
                border-radius: 0 0 15px 15px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            }
            
            h1 {
                margin: 0;
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-style: italic;
                margin-top: 5px;
            }
            
            .products {
                margin-top: 30px;
            }
            
            .product-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 20px;
            }
            
            .product-card {
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            
            .product-image {
                height: 200px;
                background-color: #f8f8f8;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
            }
            
            .product-image img {
                max-width: 100%;
                max-height: 100%;
                object-fit: cover;
            }
            
            .product-info {
                padding: 15px;
            }
            
            .product-title {
                font-size: 1.2rem;
                font-weight: bold;
                margin-bottom: 10px;
                color: var(--primary);
            }
            
            .product-price {
                font-size: 1.4rem;
                font-weight: bold;
                color: var(--secondary);
                margin-bottom: 10px;
            }
            
            .product-stock {
                display: inline-block;
                padding: 3px 8px;
                border-radius: 4px;
                font-size: 0.8rem;
                margin-bottom: 10px;
            }
            
            .in-stock {
                background-color: var(--success);
                color: white;
            }
            
            .low-stock {
                background-color: var(--secondary);
                color: white;
            }
            
            .product-details {
                margin-top: 10px;
                font-size: 0.9rem;
            }

            .detail-row {
                display: flex;
                margin-bottom: 5px;
                border-bottom: 1px dotted #eee;
                padding-bottom: 3px;
            }

            .detail-label {
                font-weight: bold;
                color: var(--dark);
                width: 80px; /* Fixed width for all labels */
                display: inline-block;
                position: relative;
            }

            .detail-label::after {
                content: "";
            }

            .add-form {
                margin-top: 40px;
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }
            
            .form-title {
                color: var(--primary);
                margin-bottom: 20px;
                text-align: center;
            }
            
            .form-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 15px;
            }
            
            .form-group {
                margin-bottom: 15px;
            }
            
            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                color: var(--dark);
            }
            
            input, select {
                width: 100%;
                padding: 8px 12px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 1rem;
            }
            
            input[type="file"] {
                padding: 8px 0;
            }
            
            .file-upload {
                border: 1px dashed #ddd;
                padding: 10px;
                border-radius: 4px;
                text-align: center;
                position: relative;
            }
            
            .file-upload-text {
                margin-bottom: 8px;
                color: var(--dark);
            }
            
            .submit-btn {
                background-color: var(--primary);
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 1rem;
                margin-top: 15px;
                transition: background-color 0.3s;
            }
            
            .submit-btn:hover {
                background-color: #3a5b8c;
            }
            
            footer {
                margin-top: 40px;
                text-align: center;
                padding: 20px;
                background-color: var(--primary);
                color: white;
                border-radius: 15px 15px 0 0;
            }
            
            .temp-notice {
                background-color: #fff3cd;
                color: #856404;
                padding: 10px 15px;
                border-radius: 4px;
                margin-bottom: 20px;
                border: 1px solid #ffeeba;
            }
            
            .success-message {
                background-color: #d4edda;
                color: #155724;
                padding: 10px 15px;
                border-radius: 4px;
                margin-bottom: 20px;
                border: 1px solid #c3e6cb;
            }
            
            .error-message {
                background-color: #f8d7da;
                color: #721c24;
                padding: 10px 15px;
                border-radius: 4px;
                margin-bottom: 20px;
                border: 1px solid #f5c6cb;
            }
            
            .temp-label {
                display: inline-block;
                background-color: var(--warning);
                color: #333;
                padding: 2px 6px;
                border-radius: 3px;
                font-size: 0.8rem;
                margin-left: 5px;
                vertical-align: middle;
            }
            
            @media (max-width: 768px) {
                .product-grid {
                    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                }
                .form-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Pet Fashion Shop</h1>
                <div class="subtitle">Pakaian Berkualitas untuk Hewan Kesayangan Anda</div>
            </div>
        </header>
        
        <div class="container">
            <?php if (isset($success_message)): ?>
            <div class="success-message">
                <?php echo $success_message; ?>
            </div>
            <?php endif; ?>
            
            <?php if (isset($id_error)): ?>
            <div class="error-message">
                <?php echo $id_error; ?>
            </div>
            <?php endif; ?>
            
            <section class="products">
                <h2>Katalog Produk</h2>
                <div class="product-grid">
                    <?php 
                    $default_count = count(getDefaultProducts());
                    $current_count = 0;
                    foreach ($list_Baju as $baju): 
                        $current_count++;
                        $is_temp = ($current_count > $default_count);
                    ?>
                    <div class="product-card">
                        <div class="product-image">
                            <?php if (!empty($baju->getFoto())): ?>
                                <img src="images/<?php echo htmlspecialchars($baju->getFoto()); ?>" alt="<?php echo htmlspecialchars($baju->getNamaProduk()); ?>" onerror="this.src='https://via.placeholder.com/300x200?text=<?php echo urlencode($baju->getNamaProduk()); ?>'">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/300x200?text=<?php echo urlencode($baju->getNamaProduk()); ?>" alt="<?php echo htmlspecialchars($baju->getNamaProduk()); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                <?php echo htmlspecialchars($baju->getNamaProduk()); ?>
                                <?php if ($is_temp): ?>
                                <span class="temp-label">Sementara</span>
                                <?php endif; ?>
                            </div>
                            <div class="product-price">Rp <?php echo number_format($baju->getHargaProduk(), 0, ',', '.'); ?></div>
                            
                            <?php if ($baju->getStokProduk() > 5): ?>
                                <div class="product-stock in-stock">Stok: <?php echo $baju->getStokProduk(); ?></div>
                            <?php else: ?>
                                <div class="product-stock low-stock">Stok Terbatas: <?php echo $baju->getStokProduk(); ?></div>
                            <?php endif; ?>
                            
                            <div class="product-details">
                                <div class="detail-row">
                                    <span class="detail-label">ID</span>
                                    <span>: <?php echo htmlspecialchars($baju->getId()); ?></span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Jenis</span>
                                    <span>: <?php echo htmlspecialchars($baju->getJenis()); ?></span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Bahan</span>
                                    <span>: <?php echo htmlspecialchars($baju->getBahan()); ?></span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Warna</span>
                                    <span>: <?php echo htmlspecialchars($baju->getWarna()); ?></span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Untuk</span>
                                    <span>: <?php echo htmlspecialchars($baju->getUntuk()); ?></span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Ukuran</span>
                                    <span>: <?php echo htmlspecialchars($baju->getSize()); ?></span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Merk</span>
                                    <span>: <?php echo htmlspecialchars($baju->getMerk()); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            
            <section class="add-form">
                <h2 class="form-title">Tambah Produk Baru</h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="id">ID Produk:</label>
                            <input type="text" id="id" name="id" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk:</label>
                            <input type="text" id="nama_produk" name="nama_produk" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="harga_produk">Harga (Rp):</label>
                            <input type="number" id="harga_produk" name="harga_produk" required min="0">
                        </div>
                        
                        <div class="form-group">
                            <label for="stok_produk">Stok:</label>
                            <input type="number" id="stok_produk" name="stok_produk" required min="0">
                        </div>
                        
                        <div class="form-group">
                            <label for="foto">Foto Produk:</label>
                            <input type="file" id="foto" name="foto" accept="image/*">
                        </div>
                        
                        <div class="form-group">
                            <label for="jenis">Jenis:</label>
                            <input type="text" id="jenis" name="jenis" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="bahan">Bahan:</label>
                            <input type="text" id="bahan" name="bahan" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="warna">Warna:</label>
                            <input type="text" id="warna" name="warna" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="untuk">Untuk:</label>
                            <input type="text" id="untuk" name="untuk" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="size">Ukuran:</label>
                            <select id="size" name="size">
                                <option value="XXXS">XXXS</option>
                                <option value="XXS">XXS</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="merk">Merk:</label>
                            <input type="text" id="merk" name="merk" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn">Tambah Produk</button>
                </form>
            </section>
        </div>
        
        <footer>
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> Pet Fashion Shop - Pakaian Berkualitas untuk Hewan Kesayangan</p>
            </div>
        </footer>
    </body>
    </html>
    <?php
}
?>