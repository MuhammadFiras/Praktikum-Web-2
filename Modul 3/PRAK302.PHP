<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .img {
        width: 10px;
    }
</style>
<body>
    <form method="post" action="">
        Tinggi:
        <input type="number" name="tinggi"><br>
        Alamat Gambar:
        <input type="text" name="linkGambar"><br>

        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $tinggi = $_POST['tinggi'];
            $alamatGambar = $_POST['linkGambar'];
            $i = 0;
            $j = 0;
            $placeholderUrutan = $_POST['tinggi'];

            while ($i < $tinggi) {
                while ($j < $placeholderUrutan) {
                    echo "<img src='$alamatGambar' class='img'>";
                    $j++;
                }
                echo "<br>";
                $placeholderUrutan--;
                $j = 0;
                $i++;
            }
        }
        
    ?>
</body>
</html>