<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surveyresponse extends Model
{
    protected $guarded = [];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
