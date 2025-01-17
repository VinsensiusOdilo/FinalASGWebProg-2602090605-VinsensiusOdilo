<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    protected $table='friend';
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(AppUser::class);
    }
}
