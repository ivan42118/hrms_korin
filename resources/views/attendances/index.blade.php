@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Presensi Karyawan</h2>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <a href="{{ route('attendances.create') }}">Tambah Presensi</a>

    <table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->employee->nama_lengkap ?? '-' }}</td>
                    <td>{{ $attendance->tanggal }}</td>
                    <td>{{ $attendance->jam_masuk ?? '-' }}</td>
                    <td>{{ $attendance->jam_keluar ?? '-' }}</td>
                    <td>{{ $attendance->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
