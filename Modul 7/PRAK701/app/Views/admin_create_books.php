<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    .form-wrapper {
        max-width: 600px;
        margin: 0 auto;
        background: linear-gradient(to bottom right, #ffffff, #f8f9fa);
        padding: 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
        animation: fadeIn 0.6s ease-out;
    }

    .form-wrapper h2 {
        font-weight: 600;
        margin-bottom: 1.5rem;
        text-align: center;
        color: #343a40;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        transition: all 0.3s ease-in-out;
    }

    button.btn-primary {
        width: 100%;
        padding: 0.75rem;
        font-size: 1.1rem;
        border-radius: 0.5rem;
        transition: background-color 0.3s ease;
    }

    button.btn-primary:hover {
        background-color: #0056b3;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="form-wrapper">
    <h2>📚 Tambah Buku Baru</h2>
    <form action="" method="post" id="text-editor">
        <div class="form-group mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
        </div>
        <div class="form-group mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" placeholder="Masukkan Penulis" required>
        </div>
        <div class="form-group mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Penerbit" required>
        </div>
        <div class="form-group mb-4">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" min="1901" max="2024" placeholder="Masukkan Tahun Terbit" required>
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="simpan" class="btn btn-primary">
                Simpan Buku
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
