<?php
    require_once 'Model.php';

    $data = [
        'nama_member' => '',
        'nomor_member' => '',
        'alamat' => '',
        'tgl_mendaftar' => '',
        'tgl_terakhir_bayar' => ''
    ];

    $edit = false;

    if (isset($_GET['id'])) {
        $data = getMemberById($_GET['id']);
        $edit = true;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($edit) {
            updateMember($_GET['id'], $_POST);
        } else {
            insertMember($_POST);
        }
        header("Location: Member.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $edit ? 'Edit Member' : 'Tambah Member' ?></title>
    <link rel="stylesheet" href="styles/formstyle.css">
</head>
<body>

<div class="container">
<h2><?= $edit ? 'Edit Member' : 'Tambah Member' ?></h2>

<form method="POST">
    <label>Nama Member:</label><br>
    <input type="text" name="nama_member" required value="<?= htmlspecialchars($data['nama_member']) ?>"><br><br>

    <label>Nomor Member:</label><br>
    <input type="text" name="nomor_member" required value="<?= htmlspecialchars($data['nomor_member']) ?>"><br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" required><?= htmlspecialchars($data['alamat']) ?></textarea><br><br>

    <label>Tanggal Mendaftar:</label><br>
    <input type="datetime-local" name="tgl_mendaftar" value="<?= $data['tgl_mendaftar'] ? date('Y-m-d\TH:i', strtotime($data['tgl_mendaftar'])) : '' ?>"><br><br>

    <label>Tanggal Terakhir Daftar:</label><br>
    <input type="date" name="tgl_terakhir_bayar" value="<?= $data['tgl_terakhir_bayar'] ?>"><br><br>

    <button type="submit">Simpan</button>
    <a href="Member.php">Kembali</a>
</form>
</div>

</body>
</html>
