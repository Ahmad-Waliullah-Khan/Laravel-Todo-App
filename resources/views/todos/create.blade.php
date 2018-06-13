@extends('layouts.app')

@section('content')
    <h1>Create ToDo</h1>
    {!! Form::open(['action' => 'ToDosController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('text', 'Text')}}
            {{Form::text('text', '' , ['class' => 'form-control', 'placeholder' => 'Enter Title Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '' , ['class' => 'form-control', 'placeholder' => 'Enter Body'])}}
        </div>
        <div class="form-group">
            {{Form::label('due', 'Due')}}
            {{Form::text('due', '', ['class' => 'form-control', 'placeholder' => 'Enter Due Date'])}}
        </div>
        <div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div> 
    {!! Form::close() !!}

@endsection