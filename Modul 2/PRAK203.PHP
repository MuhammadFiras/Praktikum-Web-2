<?php
$nilai = $tipe_suhu_awal = $tipe_suhu_akhir = $hasil = $derajat = "";

    if (isset($_POST['submit'])) {
        $nilai = $tipe_suhu_awal = $tipe_suhu_akhir = $hasil = $derajat = "";

        $nilai = $_POST['nilai_awal'];
        $tipe_suhu_awal = $_POST['tipe_suhu_awal'];
        $tipe_suhu_akhir = $_POST['tipe_suhu_akhir'];


        if ($tipe_suhu_awal == "Celcius" && $tipe_suhu_akhir == "Celcius") {
            $hasil = $nilai;
            $derajat = "C";
        }
        elseif ($tipe_suhu_awal == "Celcius" && $tipe_suhu_akhir == "Fahrenheit") {
            $hasil = (9/5) * $nilai + 32 ;
            $derajat = "F";
        }
        elseif ($tipe_suhu_awal == "Celcius" && $tipe_suhu_akhir == "Rheamur") {
            $hasil = (4/5) * $nilai;
            $derajat = "R";
        }
        elseif ($tipe_suhu_awal == "Celcius" && $tipe_suhu_akhir == "Kelvin") {
            $hasil = $nilai + 273 ;
            $derajat = "K";
        }

        elseif ($tipe_suhu_awal == "Fahrenheit" && $tipe_suhu_akhir == "Celcius") {
            $hasil = number_format((5/9 * ($nilai - 32)), 4) ;
            $derajat = "C";
        }
        elseif ($tipe_suhu_awal == "Fahrenheit" && $tipe_suhu_akhir == "Fahrenheit") {
            $hasil = $nilai;
            $derajat = "F";
        }
        elseif ($tipe_suhu_awal == "Fahrenheit" && $tipe_suhu_akhir == "Rheamur") {
            $hasil = (4/9) * ($nilai - 32);
            $derajat = "R";
        }
        elseif ($tipe_suhu_awal == "Fahrenheit" && $tipe_suhu_akhir == "Kelvin") {
            $hasil = number_format((5/9 * ($nilai - 32) + 273), 4);
            $derajat = "F";
        }

        elseif ($tipe_suhu_awal == "Rheamur" && $tipe_suhu_akhir == "Celcius") {
            $hasil = number_format((5/4 * $nilai), 4);
            $derajat = "C";
        }
        elseif ($tipe_suhu_awal == "Rheamur" && $tipe_suhu_akhir == "Fahrenheit") {
            $hasil = number_format((9/4 * $nilai + 32), 4);
            $derajat = "F";
        }
        elseif ($tipe_suhu_awal == "Rheamur" && $tipe_suhu_akhir == "Rheamur") {
            $hasil = $nilai;
            $derajat = "R";
        }
        elseif ($tipe_suhu_awal == "Rheamur" && $tipe_suhu_akhir == "Kelvin") {
            $hasil = number_format((5/4 * $nilai + 273), 4);
            $derajat = "K";
        }

        elseif ($tipe_suhu_awal == "Kelvin" && $tipe_suhu_akhir == "Celcius") {
            $hasil = $nilai - 273;
            $derajat = "C";
        }
        elseif ($tipe_suhu_awal == "Kelvin" && $tipe_suhu_akhir == "Fahrenheit") {
            $hasil = number_format((9/5 * ($nilai - 273) + 32), 4);
            $derajat = "F";
        }
        elseif ($tipe_suhu_awal == "Kelvin" && $tipe_suhu_akhir == "Rheamur") {
            $hasil = number_format((4/5 * ($nilai - 273) + 32), 4);
            $derajat = "R";
        }
        else {
            $hasil = $nilai;
            $derajat = "K";
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
        <input type="text" name="nilai_awal"><br>
        
        Dari:<br>
        <input type="radio" name="tipe_suhu_awal" value="Celcius" <?= ($tipe_suhu_awal == "Celcius") ? "checked" : ""; ?>> Celcius<br>
        <input type="radio" name="tipe_suhu_awal" value="Fahrenheit" <?= ($tipe_suhu_awal == "Fahrenheit") ? "checked" : ""; ?>> Fahrenheit<br>
        <input type="radio" name="tipe_suhu_awal" value="Rheamur" <?= ($tipe_suhu_awal == "Rheamur") ? "checked" : ""; ?>> Rheamur<br>
        <input type="radio" name="tipe_suhu_awal" value="Kelvin" <?= ($tipe_suhu_awal == "Kelvin") ? "checked" : ""; ?>> Kelvin<br>

        Ke:<br>
        <input type="radio" name="tipe_suhu_akhir" value="Celcius" <?= ($tipe_suhu_akhir == "Celcius") ? "checked" : ""; ?>> Celcius<br>
        <input type="radio" name="tipe_suhu_akhir" value="Fahrenheit" <?= ($tipe_suhu_akhir == "Fahrenheit") ? "checked" : ""; ?>> Fahrenheit<br>
        <input type="radio" name="tipe_suhu_akhir" value="Rheamur" <?= ($tipe_suhu_akhir == "Rheamur") ? "checked" : ""; ?>> Rheamur<br>
        <input type="radio" name="tipe_suhu_akhir" value="Kelvin" <?= ($tipe_suhu_akhir == "Kelvin") ? "checked" : ""; ?>> Kelvin<br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
        if (!$hasil == '') {
            echo "<h2> Hasil Konversi: $hasil $derajat&deg</h2>";
        }
    ?>
</body>
</html>