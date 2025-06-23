<h2>Daftar Divisi</h2>
<a href="{{ route('divisions.create') }}">+ Tambah Divisi</a>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<ul>
@foreach ($divisions as $d)
    <li>
        {{ $d->nama_divisi }}
        <a href="{{ route('divisions.edit', $d) }}">Edit</a>
        <form method="POST" action="{{ route('divisions.destroy', $d) }}" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Hapus divisi ini?')">Hapus</button>
        </form>
    </li>
@endforeach
</ul>
