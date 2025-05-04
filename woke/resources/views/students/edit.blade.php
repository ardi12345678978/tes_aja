<h1>✏️ Edit Siswa</h1>
<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="nama" value="{{ $student->nama }}"><br><br>
    Kelas: <input type="text" name="kelas" value="{{ $student->kelas }}"><br><br>
    Nilai 1: <input type="number" name="nilai1" value="{{ $student->nilai1 }}"><br><br>
    Nilai 2: <input type="number" name="nilai2" value="{{ $student->nilai2 }}"><br><br>
    Nilai 3: <input type="number" name="nilai3" value="{{ $student->nilai3 }}"><br><br>
    <button type="submit">Update</button>
</form>
