<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $connection = 'sqlsrv';
    protected $table = 'dbo.Client';
    protected $primaryKey = 'DCLink';
}
