<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #e6f2ff; /* biru muda */
        }

        h1 {
            color: #1e3a8a; /* biru navy */
            font-weight: bold;
        }

        .form-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            background-color: #ffffff;
        }

        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #3399ff;
            border-color: #3399ff;
        }

        .btn-primary:hover {
            background-color: #1a8cff;
            border-color: #1a8cff;
        }

        .btn-secondary:hover {
            background-color: #cccccc;
            border-color: #cccccc;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand text-primary fw-bold" href="{{ route('books.index') }}">SereneStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{ route('books.index') }}">Daftar Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{ route('books.create') }}">Tambah Buku</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Edit Buku</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card form-card p-4">
                <form method="POST" action="{{ route('books.update', $book->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Judul Buku:</label>
                        <input type="text" name="JudulBuku" class="form-control" value="{{ $book->JudulBuku }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga:</label>
                        <input type="text" name="Harga" class="form-control" value="{{ $book->Harga }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok:</label>
                        <input type="number" name="Stok" class="form-control" value="{{ $book->Stok }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">💾 Update</button>
                </form>

                <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3 w-100">⬅️ Kembali ke Daftar Buku</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
