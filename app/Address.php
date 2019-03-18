<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //

    public function people()
    {
        return $this->hasMany(People::class);
    }
}
