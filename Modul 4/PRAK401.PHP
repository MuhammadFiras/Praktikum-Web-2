<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK401 - Cetak Matriks</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        Panjang:
        <input type="number" name="panjang"><br>
        Lebar:
        <input type="number" name="lebar"><br>
        Nilai:
        <input type="text" name="nilai"><br>
        
        <button type="submit" name="submit">Cetak</button>
    </form>

    <br>

    <?php
    if (isset($_POST['submit'])) {
        $panjang = (int) $_POST['panjang'];
        $lebar = (int) $_POST['lebar'];
        $nilai = trim($_POST['nilai']);

        $nilaiArray = explode(' ', $nilai);

        if (count($nilaiArray) !== $panjang * $lebar) {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        } else {
            echo "<table>";
            $index = 0;
            for ($i = 0; $i < $lebar; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $panjang; $j++) {
                    echo "<td>" . $nilaiArray[$index++] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
