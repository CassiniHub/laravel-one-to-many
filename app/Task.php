<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'employee_id'
    ];

    public function employee()
    {
        return $this -> belongsTo('App\Employee');
    }
}
