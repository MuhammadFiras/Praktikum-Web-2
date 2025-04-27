<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRK403 - KRS Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th {
            font-weight: bold;
            background-color: #CCCDCC;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        .greenBox {
            background-color: green;
        }
        .redBox {
            background-color: red;
        }
        .totalSKS {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$arrayData = [
    [
        "Nomor" => 1,
        "Nama" => "Ridho",
        "MataKuliah" => ["Pemrograman 1", "Praktikum Pemrograman 1", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"],
        "SKS" => [2, 1, 2, 3]
    ],
    [
        "Nomor" => 2,
        "Nama" => "Ratna",
        "MataKuliah" => ["Basis Data 1", "Praktikum Basis Data 1", "Kalkulus"],
        "SKS" => [2, 1, 3]
    ],
    [
        "Nomor" => 3,
        "Nama" => "Tono",
        "MataKuliah" => ["Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"],
        "SKS" => [3, 3, 3, 3]
    ]
];

// Hitung total SKS dan keterangan
foreach ($arrayData as $key => $value) {
    $totalSKS = array_sum($value['SKS']);
    $arrayData[$key]['totalSKS'] = $totalSKS;
    $arrayData[$key]['Keterangan'] = ($totalSKS < 7) ? 'Revisi KRS' : 'Tidak Revisi';
}
?>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah Diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>

    <?php foreach ($arrayData as $data) : ?>
        <?php $rowSpan = count($data['MataKuliah']); ?>
        <?php for ($i = 0; $i < $rowSpan; $i++) : ?>
            <tr>
                <?php if ($i == 0) : ?>
                    <td rowspan="<?= $rowSpan ?>"><?= $data['Nomor'] ?></td>
                    <td rowspan="<?= $rowSpan ?>"><?= $data['Nama'] ?></td>
                <?php endif; ?>

                <td><?= $data['MataKuliah'][$i] ?></td>
                <td><?= $data['SKS'][$i] ?></td>

                <?php if ($i == 0) : ?>
                    <td rowspan="<?= $rowSpan ?>" class="totalSKS"><?= $data['totalSKS'] ?></td>
                    <td rowspan="<?= $rowSpan ?>" class="<?= ($data['Keterangan'] == 'Revisi KRS') ? 'redBox' : 'greenBox' ?>">
                        <?= $data['Keterangan'] ?>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endfor; ?>
    <?php endforeach; ?>
</table>

</body>
</html>
