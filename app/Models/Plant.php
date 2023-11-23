<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sensor;

class Plant extends Model
{
    use HasFactory;
    protected $table ='floors';

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function sensors(){

        return $this->belongsToMany(Sensor::class);
    }
}
