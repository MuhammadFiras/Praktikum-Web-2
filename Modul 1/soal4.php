<?php
    $samsung = array(
        "Samsung Galaxy S22", "Samsung Galaxy S22+",
        "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>    
</head>

<style> 
    table, td {
        border : 1px solid black;
    }
</style>

<body>
    <table>
        <tr>
            <td> <b>Daftar Smartphone Samsung</b> </td>
        </tr>

        <?php
            foreach ($samsung as $item):
        ?>

        <tr>
            <td> <?= $item; ?> </td>
        </tr>

        <?php endforeach; ?>
        
    </table>
</body>
</html>