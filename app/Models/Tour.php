<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attraction;

class Tour extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['attraction'];

    public function attraction(){
    	return $this->belongsTo(Attraction::class);
    }
}
