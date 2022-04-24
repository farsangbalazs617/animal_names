<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{


    protected $fillable = ['aname', 'species'];
    public $timestamps = true;

    public function novels()
    {
        return $this->belongsToMany(Novel::class, 'connectings', 'animalid', 'novelid');
    }
}
