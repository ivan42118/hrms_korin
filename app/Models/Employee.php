<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nip',
        'jabatan',
        'jenis_kelamin',
        'tanggal_masuk',
        'division_id',
        'tarif_harian',
        'tarif_lembur'
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }
}
