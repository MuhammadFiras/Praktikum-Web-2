<?php
    $samsung = array(
        "S22" => "Samsung Galaxy S22", 
        "S22+" => "Samsung Galaxy S22+",
        "A03" => "Samsung Galaxy A03", 
        "XC5" => "Samsung Galaxy Xcover 5"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5</title>
</head>

<style> 
    table, td {
        border : 1px solid black;
    }
    .head {
        background-color: red;
        padding: 20px 0;
        font-size: 1.5rem;
    }
</style>

<body>
    <table>
        <tr>
            <td class="head"> <b>Daftar Smartphone Samsung</b> </td>
        </tr>

        <tr>
            <td> <?= $samsung["S22"] ?> </td>
        </tr>

        <tr>
            <td> <?= $samsung["S22+"] ?> </td>
        </tr>

        <tr>
            <td> <?= $samsung["A03"] ?> </td>
        </tr>

        <tr>
            <td> <?= $samsung["XC5"] ?> </td>
        </tr>
    </table>
</body>
</html>