<!DOCTYPE html>
<html>
<head>
    <title>Upload Gambar</title>
</head>
<body>

    <h2>Form Upload Gambar</h2>

    {{-- Pesan sukses --}}
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Form Upload -->
    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Judul:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Pilih Gambar:</label><br>
        <input type="file" name="image" required><br><br>

        <button type="submit">Upload</button>
    </form>

    <hr>

    <!-- Daftar Gambar -->
    <h3>Daftar Gambar yang Sudah Diupload:</h3>

    @if ($images->isEmpty())
        <p>Belum ada gambar yang diupload.</p>
    @else
        @foreach ($images as $image)
            <div style="margin-bottom: 20px;">
                <p><strong>{{ $image->title }}</strong></p>
                <img src="{{ asset('storage/' . $image->image_path) }}" width="200"><br>

                <!-- Form Hapus -->
                <form action="{{ route('image.destroy', $image->id) }}" method="POST" style="margin-top: 10px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus gambar ini?')">
                        Hapus Gambar
                    </button>
                </form>
            </div>
        @endforeach
    @endif

</body>
</html>
