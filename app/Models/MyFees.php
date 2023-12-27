<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyFees extends Model
{
    use HasFactory;
    protected $fillable = [];
    public $timestamps = false;
    protected $connection = 'sqlsrv';
    protected $table = 'dbo.PostAR';
}
