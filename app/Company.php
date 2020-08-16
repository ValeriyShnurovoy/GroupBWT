<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    protected $fillable = [
        'country_id', 'name',
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
