<?php
$nama = $nim = $jenis_kelamin = "";
$namaErr = $nimErr = $jkErr = "";
$output = false;

if (isset($_POST['submit'])) {
    if (empty($_POST["nama"])) {
        $namaErr = "nama tidak boleh kosong";
    } else {
        $nama = $_POST["nama"];
    }

    if (empty($_POST["nim"])) {
        $nimErr = "nim tidak boleh kosong";
    } else {
        $nim = $_POST["nim"];
    }

    if (empty($_POST["jenis_kelamin"])) {
        $jkErr = "jenis kelamin tidak boleh kosong";
    } else {
        $jenis_kelamin = $_POST["jenis_kelamin"];
    }

    if (empty($namaErr) && empty($nimErr) && empty($jkErr)) {
        $output = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Soal 2</title>
    <style>
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>

<form method="post" action="">
    Nama:
    <input type="text" name="nama"> <span class="error">* <?= $namaErr ?></span>
    <br>

    Nim:
    <input type="text" name="nim"> <span class="error">* <?= $nimErr ?></span>
    <br>

    Jenis Kelamin: <span class="error">* <?= $jkErr ?></span><br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($jenis_kelamin == "Laki-laki") ? "checked" : ""; ?>> Laki-Laki<br>
    <input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($jenis_kelamin == "Perempuan") ? "checked" : ""; ?>> Perempuan<br><br>

    <button name="submit" type="submit">Submit</button>
</form>

<?php
    if (isset($_POST['submit'])) {
        if (!empty($nama) && !empty($nim) && !empty($jenis_kelamin)) {
            echo "
            <h2>Output: </h2>
            $nama <br>
            $nim <br>
            $jenis_kelamin";
            $output = false;
        }
    }    
?>

</body>
</html>
