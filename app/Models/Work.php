<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    static $statuses = [
        1 => "Active ✅",
        0 => "Arxive ❌",
    ];

    protected $table = 'works';

    protected $guarded = [];

}
