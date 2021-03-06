<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class Address extends Model implements Scope
{
    protected $fillable = [
        'country',
        'state',
        'city',
        'street',
        'house'
    ];

    public function people()
    {
        return $this->hasMany(People::class);
    }

    public function apply(Builder $builder, Model $model)
    {

    }
}
