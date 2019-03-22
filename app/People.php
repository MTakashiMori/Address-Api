<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'name',
        'telephone',
        'address_id',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
