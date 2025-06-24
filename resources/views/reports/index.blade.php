@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Rekap Absensi Karyawan</h2>

    <form method="GET" action="{{ route('rekap.index') }}">
        <label>Dari Tanggal:</label>
        <input type="date" name="tanggal_awal" value="{{ $tanggalAwal }}">
        <label>Sampai Tanggal:</label>
        <input type="date" name="tanggal_akhir" value="{{ $tanggalAkhir }}">
        <button type="submit">Tampilkan</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Status</th>
                <th>Lembur (jam)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $a)
            <tr>
                <td>{{ $a->employee->nama_lengkap }}</td>
                <td>{{ $a->tanggal }}</td>
                <td>{{ $a->jam_masuk }}</td>
                <td>{{ $a->jam_keluar }}</td>
                <td>{{ $a->status }}</td>
                <td>{{ $a->lembur_jam }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
