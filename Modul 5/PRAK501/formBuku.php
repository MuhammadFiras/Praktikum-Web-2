<?php
require_once 'Model.php';

$data = [
    'judul_buku' => '',
    'penulis' => '',
    'penerbit' => '',
    'tahun_terbit' => ''
];
$edit = false;

if (isset($_GET['id'])) {
    $data = getBookById($_GET['id']);
    $edit = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($edit) {
        updateBook($_GET['id'], $_POST);
    } else {
        insertBook($_POST);
    }
    header("Location: Buku.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $edit ? "Edit Buku" : "Tambah Buku" ?></title>
    <link rel="stylesheet" href="styles/formstyle.css">
</head>
<body>

<div class="container">
<h2><?= $edit ? "Edit Buku" : "Tambah Buku" ?></h2>

<form method="POST">
    <label>Judul Buku:</label><br>
    <input type="text" name="judul_buku" required value="<?= htmlspecialchars($data['judul_buku']) ?>"><br><br>

    <label>Penulis:</label><br>
    <input type="text" name="penulis" required value="<?= htmlspecialchars($data['penulis']) ?>"><br><br>

    <label>Penerbit:</label><br>
    <input type="text" name="penerbit" required value="<?= htmlspecialchars($data['penerbit']) ?>"><br><br>

    <label>Tahun Terbit:</label><br>
    <input type="number" name="tahun_terbit" required value="<?= htmlspecialchars($data['tahun_terbit']) ?>"><br><br>

    <button type="submit">Simpan</button>
    <a href="Buku.php">Kembali</a>
</form>
</div>

</body>
</html>