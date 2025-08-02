<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
</head>

<body>
    <h1>Edit Buku</h1>

    <form action="{{ route('buku.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul</label><br>
        <input type="text" name="judul" value="{{ $book->judul }}"><br><br>
        @error('judul')
            <div style="color:red;">{{ $message }}</div>
        @enderror

        <label>Penulis</label><br>
        <input type="text" name="penulis" value="{{ $book->penulis }}"><br><br>
        @error('penulis')
            <div style="color:red;">{{ $message }}</div>
        @enderror

    
        <label>Tahun terbit</label><br>
        <input type="text" name="tahun_terbit" value="{{ $book->tahun_terbit }}"><br><br>
        @error('tahun_terbit')
            <div style="color:red">{{ $message }}</div>
        @enderror

        <label>Deskripsi</label><br>
        <textarea name="deskripsi">{{ $book->deskripsi }}</textarea> <br><br>
        @error('deskripsi')
            <div style="color:red">{{ $message }}</div>
        @enderror

        
        <button type="submit">Update</button>
    </form>

</body>

</html>
