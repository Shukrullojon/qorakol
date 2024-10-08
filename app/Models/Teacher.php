<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $guarded = [];

    static $statuses = [
        1 => "Active ✅",
        0 => "Arxive ❌",
    ];

}
