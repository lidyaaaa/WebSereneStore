<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom card hover */
        .detail-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }
        .detail-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">📖 Detail Buku</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card detail-card p-4">
                <p><strong>Judul:</strong> {{ $book->JudulBuku }}</p>
                <p><strong>Harga:</strong> {{ $book->Harga }}</p>
                <p><strong>Stok:</strong> {{ $book->Stok }}</p>

                <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3 w-100">⬅️ Kembali ke Daftar Buku</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
