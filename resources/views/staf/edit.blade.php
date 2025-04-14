<h1>Edit Staf</h1>

<form method="POST" action="{{ route('staf.update', $staf->id_staf) }}">
    @csrf
    @method('PUT')
    
    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $staf->nama }}"><br><br>

    <label>Jabatan:</label><br>
    <input type="text" name="jabatan" value="{{ $staf->jabatan }}"><br><br>

    <label>Nomor Telepon:</label><br>
    <input type="text" name="nomor_telepon" value="{{ $staf->nomor_telepon }}"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ $staf->email }}"><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="{{ route('staf.show', $staf->id_staf) }}">← Kembali ke detail</a>