@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
    <h1>Edit ToDo</h1>
    {!! Form::open(['action' => ['ToDosController@update', $todo->id], 'method' => 'POST']) !!}
        
        {{ csrf_field() }}

        <div class="form-group">
            {{Form::label('text', 'Text')}}
            {{Form::text('text', $todo->text , ['class' => 'form-control', 'placeholder' => 'Enter Title Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $todo->body , ['class' => 'form-control', 'placeholder' => 'Enter Body'])}}
        </div>
        <div class="form-group">
            {{Form::label('due', 'Due')}}
            {{Form::text('due', $todo->due, ['class' => 'form-control', 'placeholder' => 'Enter Due Date'])}}
        </div>
        <div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
        </div> 
    {!! Form::close() !!}

@endsection