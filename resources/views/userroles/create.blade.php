@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <header>
        <h4>New User Role</h4>
      </header>
      {!! Form::open(['route' => $userrole->url(),'class' => 'app-form', 'method' => $userrole->method()]) !!}
        <div class="form-group">
          {!! Form::label('Role', 'Role') !!}
          {!! Form::text('Role','',['class' => 'form-control', 'placeholder' => 'Role']) !!}
        </div>
        <input type="submit" value="Submit" class="btn btn-success" />
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection