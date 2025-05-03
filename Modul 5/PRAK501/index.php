<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan TI</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('foto_perpus.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            color: white;
            text-shadow: 1px 1px 2px black;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 30px;
            background-color: rgba(0,0,0,0.5);
            padding: 15px 30px;
            border-radius: 12px;
        }

        .button-container {
            display: flex;
            gap: 25px;
        }

        .button-container a {
            text-decoration: none;
            padding: 15px 30px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            font-weight: bold;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 18px;
        }

        .button-container a:hover {
            background-color: #ffffff;
            color: #000000;
        }
    </style>
</head>
<body>

    <h1>Perpustakaan Firas</h1>

    <div class="button-container">
        <a href="Member.php">📋 Data Member</a> 
        <a href="Buku.php">📚 Data Buku</a>
        <a href="Peminjaman.php">📆 Data Peminjaman</a>
    </div>

</body>
</html>
