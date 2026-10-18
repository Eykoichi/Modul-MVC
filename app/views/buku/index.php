<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Data Buku</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    :root {
        --primary: #6366f1;
        --primary-hover: #4f46e5;
        --primary-light: #e0e7ff;
        --danger: #f43f5e;
        --danger-hover: #e11d48;
        --warning: #f59e0b;
        --warning-hover: #d97706;
        --bg-color: #f1f5f9;
        --card-bg: #ffffff;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --border: #cbd5e1;
        --radius: 14px;
    }

    * { box-sizing: border-box; 
        margin: 0; 
        padding: 0; 
        font-family: 'Inter', sans-serif; }
    
    body { 
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); 
        color: var(--text-main); 
        line-height: 1.6; 
        padding: 3rem 1rem; 
        min-height: 100vh;
    }

    .container { 
        max-width: 1150px; 
        margin: 0 auto; }

    .header { 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        margin-bottom: 2rem; 
        flex-wrap: wrap; 
        gap: 1rem; 
        background: var(--card-bg);
        padding: 1.75rem 2rem;
        border-radius: var(--radius);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
    }

    .header h1 { font-size: 1.85rem; font-weight: 700; color: #1e1b4b; letter-spacing: -0.025em; }
    .header p { color: var(--text-muted); font-size: 0.95rem; margin-top: 0.25rem; }

    .card { 
        background: var(--card-bg); 
        border-radius: var(--radius); 
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05); 
        padding: 2rem; 
        margin-bottom: 1.5rem; 
        border: 1px solid rgba(226, 232, 240, 0.8);
    }

    .table-header { margin-bottom: 1.5rem; display: flex; justify-content: space-between; align-items: center; }
    
    .search-input { 
        width: 100%; 
        max-width: 400px; 
        padding: 0.8rem 1rem 0.8rem 2.75rem; 
        border: 1.5px solid var(--border); 
        border-radius: 10px; 
        outline: none; 
        font-size: 0.95krem;
        transition: all 0.25s ease; 
        background-color: #fafafa;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2364748b' stroke-width='2'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: 0.9rem center;
        background-size: 1.1rem;
    }
    
    .search-input:focus { 
        border-color: var(--primary); 
        background-color: #ffffff;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12); 
    }

    .table-responsive { overflow-x: auto; border-radius: 10px; border: 1px solid var(--border); }
    
    .table { width: 100%; border-collapse: collapse; text-align: left; background: white; }
    
    .table th, .table td { padding: 1rem 1.2rem; border-bottom: 1px solid var(--border); font-size: 0.92rem; }
    
    .table th { 
        background-color: #f8fafc; 
        font-weight: 600; 
        color: var(--text-muted); 
        text-transform: uppercase;
        font-size: 0.78rem;
        letter-spacing: 0.05em;
    }
    
    .table tbody tr { transition: background-color 0.15s ease; }
    .table tbody tr:last-child td { border-bottom: none; }
    .table tbody tr:hover { background-color: #f1f5f9; }

    .btn { 
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.65rem 1.25rem; 
        font-size: 0.9rem; 
        font-weight: 600; 
        border-radius: 10px; 
        border: none; 
        cursor: pointer; 
        text-decoration: none; 
        transition: all 0.2s ease; 
        box-shadow: 0 2px 4px rgba(0,0,0,0.04);
    }
    
    .btn-primary { background-color: var(--primary); color: white; }
    .btn-primary:hover { background-color: var(--primary-hover); transform: translateY(-1px); box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3); }
    
    .btn-warning { background-color: var(--warning); color: white; }
    .btn-warning:hover { background-color: var(--warning-hover); }
    
    .btn-danger { background-color: var(--danger); color: white; }
    .btn-danger:hover { background-color: var(--danger-hover); }
    
    .btn-sm { padding: 0.45rem 0.85rem; font-size: 0.82rem; border-radius: 8px; }
    
    .action-btns { display: flex; gap: 0.5rem; }
    
    .badge { 
        background-color: var(--primary-light); 
        color: var(--primary); 
        padding: 0.3rem 0.65rem; 
        border-radius: 8px; 
        font-size: 0.82rem; 
        font-weight: 600; 
        letter-spacing: 0.025em;
    }
    
    .alert { 
        padding: 1rem 1.25rem; 
        border-radius: 10px; 
        margin-bottom: 1.5rem; 
        font-size: 0.92rem; 
        font-weight: 500; 
        display: flex;
        align-items: center;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02);
        transition: opacity 0.5s ease;
    }
    
    .alert-success { background-color: #ecfdf5; color: #065f46; border: 1px solid #a7f3d0; }
    .alert-danger { background-color: #fef2f2; color: #991b1b; border: 1px solid #fecaca; }
    
    .text-center { text-align: center; color: var(--text-muted); padding: 2rem !important; }
</style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div>
                <h1>📚 Katalog Data Buku</h1>
                <p>Kelola koleksi Buku dengan cepat dan efisien.</p>
            </div>
            <a href="index.php?action=create" class="btn btn-primary">+ Tambah Buku</a>
        </header>

        <?php if (isset($_GET['status'])): ?>
            <div class="alert alert-<?php echo $_GET['status'] === 'success' ? 'success' : 'danger'; ?>">
                <?php echo htmlspecialchars($_GET['msg']); ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="table-header">
                <input type="text" id="searchInput" placeholder="Cari judul buku, penulis, atau kategori..." class="search-input">
            </div>
            <div class="table-responsive">
                <table class="table" id="bukuTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($bukuList)): ?>
                            <tr><td colspan="8" class="text-center">Belum ada data buku.</td></tr>
                        <?php else: ?>
                            <?php $no = 1; foreach ($bukuList as $b): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><span class="badge"><?php echo htmlspecialchars($b['kode_buku']); ?></span></td>
                                <td><strong><?php echo htmlspecialchars($b['judul']); ?></strong></td>
                                <td><?php echo htmlspecialchars($b['penulis']); ?></td>
                                <td><?php echo htmlspecialchars($b['kategori']); ?></td>
                                <td><?php echo htmlspecialchars($b['tahun_terbit']); ?></td>
                                <td><?php echo htmlspecialchars($b['stok']); ?></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="index.php?action=edit&id=<?php echo $b['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="index.php?action=delete&id=<?php echo $b['id']; ?>" class="btn btn-sm btn-danger btn-delete">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('keyup', function() {
                    const filter = searchInput.value.toLowerCase();
                    const rows = document.querySelectorAll('#bukuTable tbody tr');
                    rows.forEach(row => {
                        row.style.display = row.textContent.toLowerCase().includes(filter) ? '' : 'none';
                    });
                });
            }

            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!confirm('Apakah Anda yakin ingin menghapus data buku ini?')) {
                        e.preventDefault();
                    }
                });
            });

            const alertBox = document.querySelector('.alert');
            if (alertBox) {
                setTimeout(() => {
                    alertBox.style.opacity = '0';
                    setTimeout(() => alertBox.remove(), 500);
                }, 4000);
            }
        });
    </script>
</body>
</html>