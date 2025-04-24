<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK304</title>
    <style>
        .img {
            width: 70px;
        }
    </style>
</head>
<body>

<?php
    // Initialize jumlahBintang dengan default 0
    $jumlahBintang = isset($_POST['jumlahBintang']) ? (int)$_POST['jumlahBintang'] : 0;

    // Cek aksi tombol
    if (isset($_POST['submit'])) {
        // Do nothing, just show initial bintang
    } elseif (isset($_POST['tambah'])) {
        $jumlahBintang++;
    } elseif (isset($_POST['kurang'])) {
        if ($jumlahBintang > 0) {
            $jumlahBintang--;
        }
    }
?>

<!-- Form Input Awal -->
<?php if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])): ?>
    <form method="post">
        Jumlah Bintang:
        <input type="number" name="jumlahBintang" min="0">
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
<?php else: ?>
    <!-- Output Setelah Submit -->
    <p><strong>Jumlah bintang <?= $jumlahBintang ?></strong></p>

    <?php for ($i = 0; $i < $jumlahBintang; $i++): ?>
        <img src="star_img.png" class="img">
    <?php endfor; ?>

    <form method="post">
        <!-- Kirim jumlah bintang sebagai hidden input agar bisa lanjut -->
        <input type="hidden" name="jumlahBintang" value="<?= $jumlahBintang ?>">
        <br>
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>
<?php endif; ?>

</body>
</html>
