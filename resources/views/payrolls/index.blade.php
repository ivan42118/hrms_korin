@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Rekap Gaji & Lembur</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Periode</th>
                <th>Nama Karyawan</th>
                <th>Gaji Pokok</th>
                <th>Jam Lembur</th>
                <th>Upah Lembur/Jam</th>
                <th>Total Gaji</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payrolls as $payroll)
                <tr>
                    <td>{{ $payroll->periode }}</td>
                    <td>{{ $payroll->employee->nama_lengkap }}</td>
                    <td>Rp{{ number_format($payroll->gaji_pokok) }}</td>
                    <td>{{ $payroll->jam_lembur }}</td>
                    <td>Rp{{ number_format($payroll->upah_lembur_per_jam) }}</td>
                    <td>Rp{{ number_format($payroll->total_gaji) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
