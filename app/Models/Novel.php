<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Novel extends Model
{
    public function animals()
    {
        return $this->belongsToMany(Animal::class, 'connectings', 'novelid', 'animalid');
    }
}
