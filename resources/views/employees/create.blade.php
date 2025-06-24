@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Karyawan</h2>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" required>
        </div>

       <div>
            <label>NIP</label>
            <input type="text" name="nip" required>
        </div>
        

        <div>
            <label>Jabatan</label>
            <input type="text" name="jabatan" required>
        </div>

        <div>
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="">Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div>
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" required>
        </div>

        <div>
            <label>Divisi</label>
            <select name="division_id" required>
                <option value="">Pilih Divisi</option>
                @foreach($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->nama_divisi }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Tarif Harian</label>
            <input type="number" step="0.01" name="tarif_harian" required>
        </div>

        <div>
            <label>Tarif Lembur per Jam</label>
            <input type="number" step="0.01" name="tarif_lembur" required>
        </div>


        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
