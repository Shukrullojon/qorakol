<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $guarded = [];

    static $statuses = [
        1 => "Active ✅",
        0 => "Arxive ❌",
    ];


    public function files()
    {
        return $this->hasMany(File::class,'model_id','id')->where('model',self::class);
    }
}
