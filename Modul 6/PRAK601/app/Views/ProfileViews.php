<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Muhammad Firas</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Google Fonts Poppin-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f8ff;
        }

        .container {
            max-width: 1000px;
        }

        .profile-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: white;
            margin-top: 50px;
        }

        .profile-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .profile-header h1 {
            margin-bottom: 0;
        }

        .profile-header p {
            font-size: 1.2rem;
        }

        .profile-content {
            padding: 30px;
        }

        .profile-content img {
            border-radius: 20%;
            border: 4px solid #007bff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-content h2 {
            font-size: 2rem;
            margin-top: 20px;
            color: #333;
        }

        .profile-content p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .btn-primary-custom {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: #0056b3;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .skills-list {
            list-style-type: none;
            padding-left: 0;
        }

        .skills-list li {
            background-color: #f8f9fa;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-card">
            <div class="profile-header">
                <h1>Profile of <?= $name ?></h1>
                <p>NIM: <?= $nim ?></p>
            </div>
            <div class="row profile-content">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="<?= base_url('images/firas.jpeg') ?>" class="img-fluid " width="200">
                </div>
                <div class="col-md-8">
                    <h2>About Me</h2><br>
                    <p><strong>Full Name:</strong> <?= $name ?></p>
                    <p><strong>Program Study:</strong> <?= $prodi ?></p>
                    <p><strong>Hobbies:</strong> <?= $hobbies ?></p>
                    <p><strong>Skills:</strong></p>
                    <ul class="skills-list">
                        <li>Debate</li>
                        <li>English Speaking</li>
                        <li>Biology</li>
                    </ul>
                    <div class="text-center">
                        <a href="<?= site_url('/') ?>" class="btn btn-primary-custom">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-OgVRvuATP1z7JjJ8F+KnujsKLXbsRocC68iW7xv4r8UjHGK0hXTew2dJ9ck7IQQB" crossorigin="anonymous"></script>
</body>

</html>