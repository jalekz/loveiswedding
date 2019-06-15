@extends('layouts.app')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <header>
        <h4>New Event</h4>
      </header>
      {!! Form::open(['route' => $plannedevent->url(),'class' => 'app-form', 'method' => $plannedevent->method()]) !!}
       <div class="form-group">
          {!! Form::label('Name', 'Name') !!}
          {!! Form::text('Name','',['class' => 'form-control', 'placeholder' => 'Name']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('HostName', 'HostName') !!}
          {!! Form::text('HostName','',['class' => 'form-control', 'placeholder' => 'myhostname.com']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Date', 'Date') !!}
          {!! Form::date('Date','',['class' => 'form-control', 'placeholder' => '2025/07/17']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Time', 'Time') !!}
          {!! Form::time('Time','',['class' => 'form-control', 'placeholder' => '18:00']) !!}
        </div>
        <select multiple="multiple" name="Users[]" id="Users">
        @foreach($users as $user)
            <option value="{{$user->ID}}" @if($aKey == $aItemKey)selected="selected"@endif>{{$aSport}}</option>
        @endforeach
        </select>
        <input type="submit" value="Submit" class="btn btn-success" />
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection