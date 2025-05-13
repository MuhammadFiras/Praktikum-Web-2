<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Muhammad Firas</title>
    <!-- Bootstrap 5 CDN for responsiveness and styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('<?= base_url('images/mrKrabsMemes.avif') ?>') no-repeat center center fixed;
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
            background-color: rgba(0, 0, 0, 0.5);
            padding: 15px 30px;
            border-radius: 12px;
            text-align: center;
        }

        h3 {
            margin-bottom: 30px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 15px 30px;
            border-radius: 12px;
            text-align: center;
        }

        .button-container {
            display: flex;
            gap: 25px;
            justify-content: center;
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

        .footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer a {
            color: #f8f9fa;
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>🏃 <?= $name ?> 🏃<br>
            <?= $nim ?> </h1>

    <h3>🗿 Welcome to my website, click below to see moi profile 🗿</h3>

    <div class="button-container">
        <a href="<?= site_url('/profile') ?>" class="btn btn-light"> 🔥 Moi Profile 🔥</a>
    </div>

    <div class="footer">
        <p>&copy; 2025 <a href="https://github.com/MuhammadFiras" target="_blank">Moi GitHub</a></p>
    </div>
</body>

</html>
