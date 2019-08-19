<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'id', 'student_id', 'address', 'zip_code', 'neighborhood', 'houses_number'
    ];

    function student(){
        return $this->hasOne(Student::class, 'student_id');
    }

}
