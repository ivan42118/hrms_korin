@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Karyawan</h2>

    <a href="{{ route('employees.create') }}">Tambah Karyawan</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama Lengkap</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Masuk</th>
                <th>Divisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->nip }}</td>
                    <td>{{ $employee->nama_lengkap }}</td>
                    <td>{{ $employee->jabatan }}</td>
                    <td>{{ $employee->jenis_kelamin }}</td>
                    <td>{{ $employee->tanggal_masuk }}</td>
                    <td>{{ $employee->division->nama_divisi ?? '-' }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>

                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
