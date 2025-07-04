<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['nama_divisi'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
