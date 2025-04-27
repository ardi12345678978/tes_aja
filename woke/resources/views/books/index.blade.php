<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>TES</h1>
    <h1>📚 Daftar Buku Perpustakaan</h1>
    <a href="{{ route('books.create') }}">+ Tambah Buku</a>
    <br><br>

    @if ($books->count())
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->year }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}">✏️ Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')">🗑️ Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>Tidak ada buku di perpustakaan.</p>
    @endif
</body>
</html>
