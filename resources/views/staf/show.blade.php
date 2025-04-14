<h1>{{ $staf->nama }}</h1>

<p>Jabatan: {{ $staf->jabatan }}</p>
<p>Nomor Telepon: {{ $staf->nomor_telepon }}</p>
<p>Email: {{ $staf->email }}</p>

<a href="{{ route('staf.edit', $staf->id_staf) }}" style="text-decoration: none; font-size: 18px;">✏️ Edit</a> |
<a href="{{ route('staf.delete', $staf->id_staf) }}" style="text-decoration: none; font-size: 18px;">🗑️ Hapus</a>

<br><br>
<a href="{{ route('staf.index') }}">← Kembali ke daftar</a>
