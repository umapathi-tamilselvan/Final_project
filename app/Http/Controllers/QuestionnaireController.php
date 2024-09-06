<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Questionnaire;
use Illuminate\Support\Facades\Auth;


class QuestionnaireController extends Controller
{
    public function create(){
        return view('Questionnaire.create');
    }
    public function store(){

        $data=request()->validate([
            'title'=>'required',
            'purpose'=>'required'
        ]);
        $data['user_id']= Auth::id();
        $questionnaire=Questionnaire::create($data);
        // dd($questionnaire);
        return redirect('/questionnaires/'.$questionnaire->id);
    }
}
