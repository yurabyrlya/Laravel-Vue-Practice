<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    public static function incomplete(){
        return static::where('completed', 0);
    }
    public static function completed(){
        return static::where('completed', 1);
    }
    public static function completeTask($id){
        static::where('id', $id)->update(['completed' =>1]);
    }
}
