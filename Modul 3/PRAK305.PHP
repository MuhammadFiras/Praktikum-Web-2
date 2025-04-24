<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soal 5</title>
</head>
<body>

<form method="post">
    <input type="text" name="input" required>
    <button type="submit">submit</button>
</form>

<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $panjang = strlen($input);
    $output = "";

    echo "<h3>Input:</h3>";
    echo "<p>" .$input. "</p>";

    echo "<h3>Output:</h3>";

    for ($i = 0; $i < $panjang; $i++) {
        $karakter = $input[$i];
        $output .= strtoupper($karakter); // huruf kapital pertama

        for ($j = 1; $j < $panjang; $j++) {
            $output .= strtolower($karakter); // sisanya huruf kecil
        }
    }

    echo "<p>" .$output. "</p>";
}
?>

</body>
</html>
