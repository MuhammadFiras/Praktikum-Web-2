<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .img {
        width: 15px;
        height: 15px;
    }
</style>
<body>
    <form method="post" action="">
        Batas Bawah:
        <input type="number" name="batasBawah"><br>
        Batas Atas:
        <input type="number" name="batasAtas"><br>

        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $batasBawah = $_POST["batasBawah"];
            $batasAtas = $_POST["batasAtas"];
            $i = $batasBawah;
            
            do {
                if(($i + 7) % 5 == 0) {
                    echo "<img src='star_img.png' class='img'>";
                } 
                else {
                    echo "$i ";
                }
                $i++;
            } while ($i <= $batasAtas);
        }
    ?>
</body>
</html>