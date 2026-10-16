<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Data Buku</h2>
    <form method="post" action="index.php?page=buku&action=update">
        <input type="hidden" name="id" value="<?= $buku['id'] ?>">

        <label>Judul Buku</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" value="<?= htmlspecialchars($buku['kategori']) ?>" required><br><br>

        <label>Harga (Rp)</label><br>
        <input type="number" name="harga" value="<?= $buku['harga'] ?>" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" value="<?= $buku['stok'] ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=buku">Kembali</a>
    </form>
</body>
</html>