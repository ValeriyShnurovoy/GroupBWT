<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    public $timestamps = false;

    protected $fillable = ['country'];

    public function company()
    {
        return $this->hasMany(Company::class);
    }
}
