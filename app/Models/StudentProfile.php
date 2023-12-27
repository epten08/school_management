<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;
    protected $fillable = ['gender', 'first_name', 'last_name', 'othernames', 'IdNo', 'user_id', 'parent_id', 'phone_number', 'parent_id'];
}
