<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;

class SurveyController extends Controller
{
    public function show(Questionnaire $questionnaire, $slug)
    {
        $questionnaire->load('questions.answers');

        return view('survey.show', compact('questionnaire'));
    }

    public function store()
    {
        dd(request()->all());
    }
}
