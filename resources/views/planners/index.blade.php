@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>Planners</h1>
</div>
<div class="container">
  <table class="table table-striped table-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
      </tr>
    </thead>
    <tbody>
    	@foreach ($planners as $planner)
      <tr>
        <td>{{$planner->Name}}</td>
        <td>{{$planner->LastName}}</td>
        <td>{{$planner->Email}}</td>
        <td>{{$planner->PhoneNumber}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection