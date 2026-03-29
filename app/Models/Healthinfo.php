<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Healthinfo extends Model
{
    protected $guarded = [];

    public function getAgeAttribute()
    {
        return $this->dob ? Carbon::parse($this->dob)->age : null;
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'healthinfo_id');
    }
}
