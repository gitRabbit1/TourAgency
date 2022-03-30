<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tours(){
    	return $this->hasMany(Tour::class);
    }
}
