@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <header>
        <h4>Edit Planner {{$planner->Name . ' ' . $planner->LastName}}</h4>
      </header>
      {!! Form::open(['route' => [$planner->url(),$planner->id],'class' => 'app-form', 'method' => $planner->method()]) !!}
        <div class="form-group">
          {!! Form::label('Email', 'Email') !!}
          {!! Form::text('Email',$planner->Email,['class' => 'form-control', 'placeholder' => 'email@domain.com']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Name', 'Name') !!}
          {!! Form::text('Name',$planner->Name,['class' => 'form-control', 'placeholder' => 'Name']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('LastName', 'LastName') !!}
          {!! Form::text('LastName',$planner->LastName,['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('PhoneNumber', 'PhoneNumber') !!}
          {!! Form::number('PhoneNumber',$planner->PhoneNumber,['class' => 'form-control', 'placeholder' => '0123456789']) !!}
        </div>
        <input type="submit" value="Submit" class="btn btn-success" />
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection