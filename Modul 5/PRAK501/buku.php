<?php
require_once 'Model.php';

$bukuList = getAllBooks();

if (isset($_GET['delete'])) {
    deleteBook($_GET['delete']);
    header("Location: Buku.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { margin: 0 5px; }
    </style>
</head>
<body>

<h2>📚 Data Buku</h2>
<a href="FormBuku.php">➕ Tambah Buku</a>

<table>
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; foreach ($bukuList as $buku): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $buku['judul_buku'] ?></td>
        <td><?= $buku['penulis'] ?></td>
        <td><?= $buku['penerbit'] ?></td>
        <td><?= $buku['tahun_terbit'] ?></td>
        <td>
            <a href="FormBuku.php?id=<?= $buku['id_buku'] ?>">✏️ Edit</a>
            <a href="Buku.php?delete=<?= $buku['id_buku'] ?>" onclick="return confirm('Yakin ingin menghapus buku ini?')">🗑️ Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
