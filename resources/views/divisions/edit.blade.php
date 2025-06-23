<h2>Edit Divisi</h2>
<form method="POST" action="{{ route('divisions.update', $division) }}">
    @csrf
    @method('PUT')
    <input type="text" name="nama_divisi" value="{{ $division->nama_divisi }}" required>
    <button type="submit">Update</button>
</form>
<a href="{{ route('divisions.index') }}">← Kembali</a>
