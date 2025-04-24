<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .green {
        color: green;
    }
    .red {
        color: red;
    }
</style>
<body>
    <form method="post" action="">
        Jumlah Peserta:
        <input type="number" name="jumlahPeserta"><br>

        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $jumlah = $_POST['jumlahPeserta'];
            $i = 0;

            while($i < $jumlah) {
                $i++;
                if ($i % 2 == 0) {
                    echo "<h2 class = 'green'> Peserta ke-$i";
                } 
                else {
                    echo "<h2 class = 'red'> Peserta ke-$i";
                }
            }
        }
    ?>



</body>
</html>