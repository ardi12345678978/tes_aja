<body>
    <h1><a href="{{ url('/') }}">📚 Daftar Siswa</a></h1>
    <a href="{{ route('students.create') }}">+ Tambah Siswa</a>
    <br><br>

    @if ($students->count())
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Nilai 1</th>
                    <th>Nilai 2</th>
                    <th>Nilai 3</th>
                    <th>Rata-rata</th>
                    <th>Grade</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->kelas }}</td>
                        <td>{{ $student->nilai1 }}</td>
                        <td>{{ $student->nilai2 }}</td>
                        <td>{{ $student->nilai3 }}</td>
                        <td>{{ number_format($student->nilai_rata2, 2) }}</td>
                        <td>{{ $student->grade }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student) }}">✏️ Edit</a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin mau hapus?')">🗑️ Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada data siswa.</p>
    @endif
</body>
