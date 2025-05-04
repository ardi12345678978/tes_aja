<h1>📝 Tambah Siswa</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br><br>
    Kelas: <input type="text" name="kelas"><br><br>
    Nilai 1: <input type="number" name="nilai1"><br><br>
    Nilai 2: <input type="number" name="nilai2"><br><br>
    Nilai 3: <input type="number" name="nilai3"><br><br>
    <button type="submit">Simpan</button>
</form>
