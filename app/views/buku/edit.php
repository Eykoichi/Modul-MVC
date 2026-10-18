<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    :root {
        --primary: #4f46e5;
        --primary-hover: #4338ca;
        --bg-color: #f8fafc;
        --card-bg: #ffffff;
        --text-main: #1e293b;
        --border: #e2e8f0;
    }

    * { 
        box-sizing: border-box; 
        margin: 0; 
        padding: 0; 
        font-family: 'Inter', sans-serif; 
    }

    body { 
        background-color: var(--bg-color); 
        color: var(--text-main); 
        line-height: 1.5; 
        padding: 2rem 1rem; 
    }

    .container { 
        max-width: 600px; 
        margin: 0 auto; 
    }

    .card { 
        background: var(--card-bg); 
        border-radius: 12px; 
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); 
        padding: 2rem; 
    }

    h2 { 
        margin-bottom: 1.5rem; 
        font-size: 1.5rem; 
        text-align: center; 
    }

    .form-group { 
        margin-bottom: 1.2rem; 
    }

    .form-group label { 
        display: block; 
        font-weight: 500; 
        margin-bottom: 0.5rem; 
        font-size: 0.9rem; 
    }

    .form-control { 
        width: 100%; 
        padding: 0.75rem; 
        border: 1px solid var(--border); 
        border-radius: 8px; 
        font-size: 0.9rem; 
        outline: none; 
    }

    .form-control:focus { 
        border-color: var(--primary); 
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1); 
    }

    .form-actions { 
        display: flex; 
        justify-content: flex-end; 
        gap: 0.75rem; 
        margin-top: 1.5rem; 
    }

    .btn { 
        display: inline-block; 
        padding: 0.6rem 1.2rem; 
        font-size: 0.9rem; 
        font-weight: 500; 
        border-radius: 8px; 
        border: none; 
        cursor: pointer; 
        text-decoration: none; 
    }

    .btn-primary { 
        background-color: var(--primary); 
        color: white; 
    }

    .btn-primary:hover { 
        background-color: var(--primary-hover); 
    }

    .btn-secondary { 
        background-color: #e2e8f0; 
        color: var(--text-main); 
    }

    .alert { 
        padding: 1rem; 
        border-radius: 8px; 
        margin-bottom: 1.5rem; 
        font-size: 0.9rem; 
        background-color: #fee2e2; 
        color: #991b1b; 
        border: 1px solid #fecaca; 
    }
</style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Edit Data Buku</h2>
            <?php if (isset($_GET['status'])): ?>
                <div class="alert"><?php echo htmlspecialchars($_GET['msg']); ?></div>
            <?php endif; ?>
            <form action="index.php?action=update&id=<?php echo $buku['id']; ?>" method="POST">
                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" value="<?php echo htmlspecialchars($buku['kode_buku']); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" name="judul" value="<?php echo htmlspecialchars($buku['judul']); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" name="penulis" value="<?php echo htmlspecialchars($buku['penulis']); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" value="<?php echo htmlspecialchars($buku['kategori']); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" value="<?php echo htmlspecialchars($buku['tahun_terbit']); ?>" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" value="<?php echo htmlspecialchars($buku['stok']); ?>" required class="form-control">
                </div>
                <div class="form-actions">
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Perbarui Buku</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>