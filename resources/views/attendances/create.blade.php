@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Presensi</h2>

    <form action="{{ route('attendances.store') }}" method="POST">
        @csrf

        <div>
            <label>Nama Karyawan</label>
            <select name="employee_id" required>
                <option value="">Pilih Karyawan</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Tanggal</label>
            <input type="date" name="tanggal" required>
        </div>

        <div>
            <label>Jam Masuk</label>
            <input type="time" name="jam_masuk">
        </div>

        <div>
            <label>Jam Keluar</label>
            <input type="time" name="jam_keluar">
        </div>

        <div>
            <label>Status</label>
            <select name="status" required>
                <option value="">Pilih Status</option>
                <option value="Hadir">Hadir</option>
                <option value="Izin">Izin</option>
                <option value="Sakit">Sakit</option>
                <option value="Alpha">Alpha</option>
            </select>
        </div>

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
