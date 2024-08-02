<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComelateEmployee extends Model
{
    use HasFactory;

    protected $connection = 'mysql_hr';

    protected $fillable = ['nik', 'name', 'department', 'alasan_terlambat', 'nama_security'];

}
