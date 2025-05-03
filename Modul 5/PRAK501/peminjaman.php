<?php
require_once 'Model.php';

$peminjamanList = getAllPeminjaman();

if (isset($_GET['delete'])) {
    deletePeminjaman($_GET['delete']);
    header("Location: Peminjaman.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { margin: 0 5px; }
    </style>
</head>
<body>

<h2>📆 Data Peminjaman</h2>
<a href="FormPeminjaman.php">➕ Tambah Peminjaman</a>

<table>
    <tr>
        <th>No</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; foreach ($peminjamanList as $peminjaman): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $peminjaman['tgl_pinjam'] ?></td>
        <td><?= $peminjaman['tgl_kembali'] ?></td>
        <td>
            <a href="FormPeminjaman.php?id=<?= $peminjaman['id_peminjaman'] ?>">✏️ Edit</a>
            <a href="Peminjaman.php?delete=<?= $peminjaman['id_peminjaman'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
