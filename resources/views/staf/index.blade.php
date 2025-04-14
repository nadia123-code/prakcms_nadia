<h1>Daftar Staf</h1>

<ul>
    @foreach ($stafs as $staf)
        <li>
            <a href="{{ route('staf.show', $staf->id_staf) }}">{{ $staf->nama }}</a>
        </li>
    @endforeach
</ul>

<a href="{{ route('staf.create') }}" style="text-decoration: none; font-size: 20px;">➕ Tambah Staf Baru</a>
