@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Input Gaji & Lembur Karyawan</h2>

    <form action="{{ route('payrolls.store') }}" method="POST">
        @csrf

        <div>
            <label>Karyawan</label>
            <select name="employee_id" required>
                <option value="">Pilih Karyawan</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Periode (YYYY-MM)</label>
            <input type="month" name="periode" required>
        </div>

        <div>
            <label>Gaji Pokok</label>
            <input type="number" name="gaji_pokok" required>
        </div>

        <div>
            <label>Jam Lembur</label>
            <input type="number" name="jam_lembur" required>
        </div>

        <div>
            <label>Upah Lembur / Jam</label>
            <input type="number" name="upah_lembur_per_jam" required>
        </div>

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
