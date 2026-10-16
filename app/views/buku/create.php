<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Buku Baru</h2>
    <form method="post" action="index.php?page=buku&action=store">
        <label>Judul Buku</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" required><br><br>

        <label>Harga (Rp)</label><br>
        <input type="number" name="harga" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" required><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=buku">Kembali</a>
    </form>
</body>
</html>