@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>New Planner</h1>
</div>
<div class="container">
  {!! Form::open(array('url' => '/planners/create/','method' => 'POST')) !!}
    <div class="form-group">
      {{Form::text("Email",'',['class' => 'form-control', 'placeholder' => 'email@domain.com'])}}
    </div>
    <div class="form-group">
      {{Form::text("Name",'',['class' => 'form-control', 'placeholder' => 'Name'])}}
    </div>
    <div class="form-group">
      {{Form::text("LastName",'',['class' => 'form-control', 'placeholder' => 'Last Name'])}}
    </div>
    <div class="form-group">
      {{Form::number("PhoneNumber",'',['class' => 'form-control', 'placeholder' => '0123456789'])}}
    </div>
    <input type="submit" value="Submit" class="btn btn-success" />
  {!! Form::close() !!}
</div>
@endsection