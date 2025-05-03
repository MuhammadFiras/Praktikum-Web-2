<?php
require_once 'Model.php';

$data = [
    'tgl_pinjam' => '',
    'tgl_kembali' => ''
];
$edit = false;

if (isset($_GET['id'])) {
    $data = getPeminjamanById($_GET['id']);
    $edit = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($edit) {
        updatePeminjaman($_GET['id'], $_POST);
    } else {
        insertPeminjaman($_POST);
    }
    header("Location: Peminjaman.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $edit ? "Edit Peminjaman" : "Tambah Peminjaman" ?></title>
    <link rel="stylesheet" href="styles/formstyle.css">
</head>
<body>

<div class="container">
<h2><?= $edit ? "Edit Peminjaman" : "Tambah Peminjaman" ?></h2>

<form method="POST">
    <label>Tanggal Pinjam:</label><br>
    <input type="date" name="tgl_pinjam" required value="<?= $data['tgl_pinjam'] ?>"><br><br>

    <label>Tanggal Kembali:</label><br>
    <input type="date" name="tgl_kembali" required value="<?= $data['tgl_kembali'] ?>"><br><br>

    <button type="submit">Simpan</button>
    <a href="Peminjaman.php">Kembali</a>
</form>
</div>

</body>
</html>
