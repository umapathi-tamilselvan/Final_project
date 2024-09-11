@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new question</div>
             <form action="/questionnaires/{{$questionnaire->id}}/questions" method="POST">
              @csrf
              <div class="form-group">
                <label  name="question" for="question">Question</label>
                <input  name="question[question]" type="text" class="form-control"
                id="question" value="{{old('question.question')}}"
                aria-describedby="questionHelp" placeholder="Enter question">
                <small id="questionHelp" class="form-text text-muted">Enter some intresting questions.</small>
                @error('question.question')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
               <div class="form-group">
                 <fieldset>
                    <legend>Choices</legend>
                    <small id="choicesHelp" class="form-text text-muted">Give a choices that more insights into your question.</small>
                    <div>
                        <div class="form-group">
                            <label  for="answer 1">Choice 1</label>
                            <input name="answers[][answer]" type="text" class="form-control"
                            id="answer 1" value="{{old('answers.0.answer')}}"
                            aria-describedby="answer 1Help" placeholder="Enter answer 1">
                            <small id="answer1Help" class="form-text text-muted">Enter some answer 1</small>
                            @error('answers.0.answer')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
             <div>
                        <div class="form-group">
                            <label  for="answer 2">Choice 2</label>
                            <input name="answers[][answer]" type="text" class="form-control"
                            id="answer 2"  value="{{old('answers.1.answer')}}"
                            aria-describedby="answer 2Help" placeholder="Enter answer 2">
                            <small id="answer2Help" class="form-text text-muted">Enter some answer 2</small>
                            @error('answers.1.answer')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                          </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label  for="answer 3">Choice 3</label>
                            <input name="answers[][answer]" type="text" class="form-control"
                            id="answer 3"   value="{{old('answers.2.answer')}}"
                            aria-describedby="answer 3Help" placeholder="Enter answer 3">
                            <small id="answer3Help" class="form-text text-muted">Enter some answer 3</small>
                            @error('answers.2.answer')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                          </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <label  for="answer 4">Choice 4</label>
                            <input name="answers[][answer]" type="text" class="form-control"
                            id="answer 4" value="{{old('answers.3.answer')}}"
                            aria-describedby="answer 4Help" placeholder="Enter answer 4">
                            <small id="answer4Help" class="form-text text-muted">Enter some answer 4</small>
                            @error('answers.3.answer')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                          </div>
                    </div>
                </fieldset>
               </div>
              <button type="submit" class="btn btn-primary">Create Question</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
