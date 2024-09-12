<?php

namespace App\Models;

use App\Models\Answer;
use App\Models\Questionnaire;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function Questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
