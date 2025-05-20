<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= esc($title ?? 'Perpustakaan TI') ?></title>

  <!-- Bootstrap & Custom Styles -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to bottom, #f7f9fc, #eef1f5);
      color: #333;
    }

    .navbar {
      background: linear-gradient(to right, #007bff, #6610f2);
    }

    .nav-link:hover,
    .dropdown-item:hover {
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 5px;
    }

    .hero {
      background: linear-gradient(to right, #fceabb, #f8b500);
      padding: 3rem 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2.5rem;
    }

    .hero p {
      font-size: 1.2rem;
      margin-top: 10px;
      color: #555;
    }

    footer {
      background-color: #f1f3f5;
      font-size: 0.9rem;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>">Perpustakaan TI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <?php if (session()->get('logged_in')): ?>
            <li class="nav-item">
              <span class="nav-link">👋 Hi, <?= esc(session()->get('username')) ?></span>
            </li>

            <!-- Buku Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                 data-bs-toggle="dropdown" aria-expanded="false">
                Buku
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item text-dark" href="<?= base_url('admin/view') ?>">List Buku</a></li>
                <li><a class="dropdown-item text-dark" href="<?= base_url('admin/create') ?>">Tambah Buku</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link text-warning" href="<?= base_url('logout') ?>">Logout</a>
            </li>

          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO (optional intro) -->
  <section class="hero mt-4 mx-3">
    <h1>Selamat Datang di Perpustakaan TI 📚</h1>
    <p>Temukan dan kelola koleksi buku teknologi informasi dengan mudah dan cepat.</p>
  </section>

  <!-- Main Content -->
  <main class="flex-fill container my-5">
    <?= $this->renderSection('content') ?>
  </main>

  <!-- Footer -->
  <footer class="text-center py-3 mt-auto">
    <p>&copy; <?= date('Y') ?> Perpustakaan TI. All rights reserved.</p>
  </footer>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
