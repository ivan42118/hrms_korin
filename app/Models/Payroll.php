<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'periode',
        'gaji_pokok',
        'jam_lembur',
        'upah_lembur_per_jam',
        'total_gaji'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
