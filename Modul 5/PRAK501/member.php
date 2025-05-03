<?php
    require_once 'Model.php';

    $members = getAllMembers();

    if (isset($_GET['delete'])) {
        deleteMember($_GET['delete']);
        header("Location: Member.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { margin: 0 5px; }
    </style>
</head>
<body>

<h2>Data Member</h2>
<a href="FormMember.php">➕ Tambah Member</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Member</th>
        <th>Nomor Member</th>
        <th>Alamat</th>
        <th>Tanggal Mendaftar</th>
        <th>Tanggal Terakhir Daftar</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1; foreach ($members as $member): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $member['nama_member'] ?></td>
            <td><?= $member['nomor_member'] ?></td>
            <td><?= $member['alamat'] ?></td>
            <td><?= $member['tgl_mendaftar'] ?></td>
            <td><?= $member['tgl_terakhir_bayar'] ?></td>
            <td>
                <a href="FormMember.php?id=<?= $member['id_member'] ?>">✏️ Edit</a>
                <a href="Member.php?delete=<?= $member['id_member'] ?>" onclick="return confirm('Hapus member ini?')">🗑️ Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
