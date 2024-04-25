<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'students';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'student_id',
        'phone_no',
        'email',
        'password'
    ];


}
