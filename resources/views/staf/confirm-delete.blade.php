<h1>Yakin ingin menghapus staf ini?</h1>

<strong>{{ $staf->nama }}</strong><br>
Jabatan: {{ $staf->jabatan }}<br>
Nomor Telepon: {{ $staf->nomor_telepon }}<br>
Email: {{ $staf->email }}

<br><br>

<form action="{{ route('staf.destroy', $staf->id_staf) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">🗑️ Ya, Hapus</button>
</form>

<a href="{{ route('staf.show', $staf->id_staf) }}">← Batal</a>
