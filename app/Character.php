<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'character';

    public function stats()
    {
        return $this->hasOne('App\Stat');
    }


}

