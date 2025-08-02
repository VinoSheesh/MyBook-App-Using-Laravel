<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Book</title>
</head>

<body>
    <h1>Tambah Buku</h1>

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <label>Judul</label><br>
        <input type="text" name="judul" required><br><br>
        @error('judul')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Penulis</label><br>
        <input type="text" name="penulis" required><br><br>
        @error('penulis')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Tahun terbit</label><br>
        <input type="text" name="tahun_terbit" required><br><br>
        @error('tahun_terbit')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Deskripsi</label><br>
        <textarea name="deskripsi" id=""></textarea><br><br>
        @error('deskripsi')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <button type="submit">Simpan</button>
    </form>
</body>

</html>
