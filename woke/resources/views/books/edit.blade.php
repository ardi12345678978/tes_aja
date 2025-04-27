<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku: {{ $book->title }}</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul:</label><br>
        <input type="text" name="title" value="{{ $book->title }}" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="author" value="{{ $book->author }}" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="year" value="{{ $book->year }}" required><br><br>

        <button type="submit">Update</button>
    </form>
    <br>
    <a href="{{ route('books.index') }}">← Kembali ke Daftar Buku</a>
</body>
</html>
