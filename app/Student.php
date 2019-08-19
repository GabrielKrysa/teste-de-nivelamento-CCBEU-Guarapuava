<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'born_date', 'age', 'phone_number', 'job', 'profission', 'study', 'schooling', 'studiedEnglish', 'studiedTime', 'change', 'why'
    ];

    function address()
    {
        return $this->hasOne(Address::class);
    }
}
