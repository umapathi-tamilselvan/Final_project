@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Questionnaire</div>
             <form action="/questionnaires" method="POST">
              @csrf
              <div class="form-group">
                <label  name="title" for="title">Title</label>
                <input  name="title" type="text" class="form-control" id="title" aria-describedby="TitleHelp" placeholder="Enter Title">
                <small id="TitleHelp" class="form-text text-muted">Enter some intresting questions.</small>
                @error('title')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="form-group">
                <label  for="purpose">Purpose</label>
                <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="PurposeHelp" placeholder="Enter Purpose">
                <small id="PurposeHelp" class="form-text text-muted">Enter some purpose</small>
                @error('purpose')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Create Questionnaire</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
