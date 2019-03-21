<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'name',
        'telephone'
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
