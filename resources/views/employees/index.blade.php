@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="margin-bottom: 20px;">Daftar Karyawan</h2>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
        <div style="color: green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tombol tambah --}}
    <a href="{{ route('employees.create') }}" style="display: inline-block; margin-bottom: 15px; padding: 8px 12px; background-color: #4CAF50; color: white; text-decoration: none;">+ Tambah Karyawan</a>

    {{-- Tabel karyawan --}}
    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead style="background-color: #f2f2f2;">
            <tr>
                <th>NIP</th>
                <th>Nama Lengkap</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Masuk</th>
                <th>Divisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td>{{ $employee->nip }}</td>
                    <td>{{ $employee->nama_lengkap }}</td>
                    <td>{{ $employee->jabatan }}</td>
                    <td>{{ $employee->jenis_kelamin }}</td>
                    <td>{{ $employee->tanggal_masuk }}</td>
                    <td>{{ $employee->division->nama_divisi ?? '-' }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" style="margin-right: 10px;">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Belum ada data karyawan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
