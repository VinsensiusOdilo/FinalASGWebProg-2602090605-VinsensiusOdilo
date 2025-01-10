<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;
    protected $table='users';
    protected $guarded=[];

    public function post(){
        return $this->hasMany(Post::class);
    }

    public function friend(){
        return $this->hasMany(Friend::class);
    }

    public function notification(){
        return $this->hasMany(Notification::class);
    }
}
