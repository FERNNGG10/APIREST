<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Floor;
use App\Models\Floor_Sensor;
class Sensor extends Model
{
    use HasFactory;
    protected $table='sensors';

    public function floors(){

        return $this->belongsToMany(Floor::class);
    }
}
