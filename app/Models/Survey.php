<?php

namespace App\Models;

use App\Models\Questionnaire;
use App\Models\Surveyresponse;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded = [];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function responses()
    {
        return $this->hasMany(Surveyresponse::class);
    }
}
