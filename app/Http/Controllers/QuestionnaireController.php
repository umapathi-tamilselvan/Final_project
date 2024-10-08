<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('Questionnaire.create');
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required',
        ]);
        $questionnaire = auth()->user()->questionnaires()->create($data);

        return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {

        $questionnaire->load('questions.answers');

        return view('Questionnaire.show', compact('questionnaire'));

    }
}
