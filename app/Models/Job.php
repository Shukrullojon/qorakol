<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    static $statuses = [
        1 => "Active ✅",
        0 => "Arxive ❌",
    ];

    protected $table = 'jobs';

    protected $guarded = [];

    public function files()
    {
        return $this->hasMany(File::class,'model_id','id')->where('model',self::class);
    }
}
