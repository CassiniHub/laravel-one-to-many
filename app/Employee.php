<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'ral'
    ];

    public function tasks()
    {
        return $this -> hasMany('App\Task');
    }
}
