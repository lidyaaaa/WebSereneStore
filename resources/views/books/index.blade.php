<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #dbeafe, #bfdbfe); /* biru muda gradient */
        }

        .book-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-left: 8px solid #60a5fa; /* biru medium */
            border-radius: 12px;
            background-color: #f0f9ff; /* biru sangat muda */
        }

        .book-card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 16px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #1e3a8a; /* biru navy */
            font-weight: bold;
        }

        .btn-primary {
            background-color: #3b82f6; /* biru terang */
            border: none;
        }

        .btn-warning {
            background-color: #fbbf24; /* kuning keemasan */
            border: none;
        }

        .btn-danger {
            background-color: #ef4444; /* merah terang */
            border: none;
        }

        .btn-sm {
            margin-right: 5px;
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
    <h1 class="mb-4 text-center">Halo, Selamat Datang di SereneStore!</h1>

    <!-- <div class="text-center mb-4">
        <a href="{{ route('books.create') }}" class="btn btn-primary">➕ Tambah Buku Baru</a>
    </div> -->
    
    <form action="{{ route('books.index') }}" method="GET" class="mb-4 d-flex justify-content-center">
    <input type="text" name="search" class="form-control w-50 me-2" placeholder="Mau Cari Apa Hari Ini?" value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary">🔍 Cari</button>
    </form>

    <div class="row">
        @forelse($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card book-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->JudulBuku }}</h5>
                        <p class="card-text">
                            <strong>Harga:</strong> {{ $book->Harga }} <br>
                            <strong>Stok:</strong> {{ $book->Stok }}
                        </p>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus buku ini?')">🗑️ Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Belum ada buku.
                </div>
            </div>
        @endforelse
    </div>
</div>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
