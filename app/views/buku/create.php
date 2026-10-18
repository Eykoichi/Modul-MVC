<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Baru</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    :root {
        --primary: #6366f1;
        --primary-hover: #4f46e5;
        --bg-color: #f1f5f9;
        --card-bg: #ffffff;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --border: #cbd5e1;
        --radius: 14px;
    }

    * { 
        box-sizing: border-box; 
        margin: 0; 
        padding: 0; 
        font-family: 'Inter', sans-serif; 
    }

    body { 
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); 
        color: var(--text-main); 
        line-height: 1.6; 
        padding: 3rem 1rem; 
        min-height: 100vh;
    }

    .container { 
        max-width: 600px; 
        margin: 0 auto; 
    }

    .card { 
        background: var(--card-bg); 
        border-radius: var(--radius); 
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05); 
        padding: 2.5rem; 
        border: 1px solid rgba(226, 232, 240, 0.8);
    }

    h2 { 
        margin-bottom: 1.75rem; 
        font-size: 1.5rem; 
        font-weight: 700;
        text-align: center; 
        color: #1e1b4b;
        letter-spacing: -0.025em;
    }

    .form-group { 
        margin-bottom: 1.25rem; 
    }

    .form-group label { 
        display: block; 
        font-weight: 600; 
        margin-bottom: 0.5rem; 
        font-size: 0.88rem; 
        color: var(--text-main);
    }

    .form-control { 
        width: 100%; 
        padding: 0.8rem 1rem; 
        border: 1.5px solid var(--border); 
        border-radius: 10px; 
        font-size: 0.95rem; 
        outline: none; 
        background-color: #fafafa;
        transition: all 0.25s ease; 
    }

    .form-control:focus { 
        border-color: var(--primary); 
        background-color: #ffffff;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12); 
    }

    .form-actions { 
        display: flex; 
        justify-content: flex-end; 
        gap: 0.75rem; 
        margin-top: 2rem; 
    }

    .btn { 
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.7rem 1.25rem; 
        font-size: 0.9rem; 
        font-weight: 600; 
        border-radius: 10px; 
        border: none; 
        cursor: pointer; 
        text-decoration: none; 
        transition: all 0.2s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.04);
    }

    .btn-primary { 
        background-color: var(--primary); 
        color: white; 
    }

    .btn-primary:hover { 
        background-color: var(--primary-hover); 
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
    }

    .btn-secondary { 
        background-color: #e2e8f0; 
        color: #475569; 
    }

    .btn-secondary:hover {
        background-color: #cbd5e1;
    }

    .alert { 
        padding: 1rem 1.25rem; 
        border-radius: 10px; 
        margin-bottom: 1.5rem; 
        font-size: 0.92rem; 
        font-weight: 500; 
        background-color: #fef2f2; 
        color: #991b1b; 
        border: 1px solid #fecaca; 
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02);
    }
</style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Tambah Data Buku Baru</h2>
            <?php if (isset($_GET['status'])): ?>
                <div class="alert"><?php echo htmlspecialchars($_GET['msg']); ?></div>
            <?php endif; ?>
            <form action="index.php?action=store" method="POST">
                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" required class="form-control" placeholder="Contoh: BK-001">
                </div>
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" name="judul" required class="form-control" placeholder="Masukkan judul buku">
                </div>
                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" name="penulis" required class="form-control" placeholder="Nama penulis">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" required class="form-control" placeholder="Contoh: Pemrograman, Novel">
                </div>
                <div class="form-group">
                    <label>Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" required class="form-control" placeholder="2026">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" required class="form-control" placeholder="Jumlah stok">
                </div>
                <div class="form-actions">
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Buku</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>