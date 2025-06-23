<h2>Tambah Divisi</h2>
<form method="POST" action="{{ route('divisions.store') }}">
    @csrf
    <input type="text" name="nama_divisi" placeholder="Nama Divisi" required>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('divisions.index') }}">← Kembali</a>
