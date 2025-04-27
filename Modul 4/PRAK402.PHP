<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table {
        border-collapse: collapse;
    }
    th {
        font-weight: bold;
        background-color: #CCCDCC;
    }
    td, th {
        border : 1px solid black;
        padding: 5px;
        text-align: left;
    }
</style>
</style>

<body>
    <?php
        $arrayData = [
            ["name" => "Andi", "nim" => 2101001, "nilaiUts" => 87, "nilaiUas" => 65],
            ["name" => "Budi", "nim" => 2101002, "nilaiUts" => 76, "nilaiUas" => 79],
            ["name" => "Tono", "nim" => 2101003, "nilaiUts" => 50, "nilaiUas" => 41],
            ["name" => "Jessica", "nim" => 2101004, "nilaiUts" => 60, "nilaiUas" => 75]
        ];

        foreach($arrayData as $key => $value) {
            $uts = $value['nilaiUts'];
            $uas = $value['nilaiUas'];

            $arrayData[$key]['hasilAkhir'] = ($uts * 0.4) + ($uas * 0.6);

            if($arrayData[$key]['hasilAkhir'] >= 80) {
                $arrayData[$key]['huruf'] = 'A';
            } 
            elseif ($arrayData[$key]['hasilAkhir'] <= 79 && $arrayData[$key]['hasilAkhir'] >= 70) {
                $arrayData[$key]['huruf'] = 'B';
            }
            elseif ($arrayData[$key]['hasilAkhir'] <= 69 && $arrayData[$key]['hasilAkhir'] >= 60) {
                $arrayData[$key]['huruf'] = 'C';
            }
            elseif ($arrayData[$key]['hasilAkhir'] <= 59 && $arrayData[$key]['hasilAkhir'] >= 50) {
                $arrayData[$key]['huruf'] = 'D';
            }
            else {
                $arrayData[$key]['huruf'] = 'E';
            }
        }
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>

        <?php foreach ($arrayData as $Data) : ?>
            <tr>
                <td><?= $Data['name'] ?></td>
                <td><?= $Data['nim'] ?></td>
                <td><?= $Data['nilaiUts'] ?></td>
                <td><?= $Data['nilaiUas'] ?></td>
                <td><?= $Data['hasilAkhir'] ?></td>
                <td><?= $Data['huruf'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>