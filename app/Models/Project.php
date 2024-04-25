<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Http\Request;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'student_id',
        'description',
        'duration',
    ];


}
