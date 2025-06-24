@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Karyawan</h2>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>NIP</label>
            <input type="text" name="nip" value="{{ $employee->nip }}" required>
        </div>

        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ $employee->nama_lengkap }}" required>
        </div>

        <div>
            <label>Jabatan</label>
            <input type="text" name="jabatan" value="{{ $employee->jabatan }}" required>
        </div>

        <div>
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="Laki-laki" {{ $employee->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $employee->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div>
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" value="{{ $employee->tanggal_masuk }}" required>
        </div>

        <div>
            <label>Divisi</label>
            <select name="division_id" required>
                @foreach($divisions as $division)
                    <option value="{{ $division->id }}" {{ $employee->division_id == $division->id ? 'selected' : '' }}>
                        {{ $division->nama_divisi }}
                    </option>
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


        <button type="submit">Update</button>
    </form>
</div>
@endsection
