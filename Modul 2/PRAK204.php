<?php
    $nilai = '';
    $hasil = '';

    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];

        if ($nilai == 0) {
            $hasil = "Nol";
        }
        elseif ($nilai > 0 && $nilai < 10) {
            $hasil = "Satuan";
        }
        elseif ($nilai > 9 && $nilai < 100) {
            $hasil = "Belasan";
        }
        elseif ($nilai > 99 && $nilai < 1000) {
            $hasil = "Ratusan";
        }
        else {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Nilai:
        <input type="text" name="nilai"><br>

        <button type="submit" name="submit">Konversi</button>
    </form>
    <?php
        if (!$hasil == '') {
            echo "<h2>Hasil: $hasil</h2>";
        }
    ?>
</body>
</html>