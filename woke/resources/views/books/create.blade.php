<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku Baru</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="author" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="year" required><br><br>

        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="{{ route('books.index') }}">← Kembali ke Daftar Buku</a>
</body>
</html>
