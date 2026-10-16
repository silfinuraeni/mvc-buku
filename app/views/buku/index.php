<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>

    <!-- Notifikasi Indikator -->
    <?php if (isset($_GET['status'])): ?>
        <div style="padding: 10px; margin-bottom: 15px; background: #e2f0d9; color: #385723; border: 1px solid #c8e1b7;">
            <?php
            echo match ($_GET['status']) {
                'success_add' => 'Data buku berhasil ditambahkan!',
                'success_update' => 'Data buku berhasil diperbarui!',
                'success_delete' => 'Data buku berhasil dihapus!',
                default => 'Operasi berhasil.'
            };
            ?>
        </div>
    <?php endif; ?>

    <a href="index.php?page=buku&action=create">Tambah Buku Baru</a><br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($buku as $b): ?>
        <tr>
            <td><?= htmlspecialchars($b['judul']) ?></td>
            <td><?= htmlspecialchars($b['penulis']) ?></td>
            <td><?= htmlspecialchars($b['kategori']) ?></td>
            <td>Rp <?= number_format($b['harga'], 0, ',', '.') ?></td>
            <td><?= $b['stok'] ?></td>
            <td>
                <a href="index.php?page=buku&action=edit&id=<?= $b['id'] ?>">Edit</a>
                <form method="post" action="index.php?page=buku&action=delete" style="display:inline" onsubmit="return confirm('Hapus buku ini?')">
                    <input type="hidden" name="id" value="<?= $b['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>