<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 
        'tanggal', 
        'jam_masuk', 
        'jam_keluar', 
        'status',
        'lembur jam'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
