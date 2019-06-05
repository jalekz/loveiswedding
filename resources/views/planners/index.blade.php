@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>Planners</h1>
</div>
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach ($planners as $planner)
      <tr>
        <td>{{$planner->Name}}</td>
        <td>{{$planner->LastName}}</td>
        <td>{{$planner->Email}}</td>
        <td>{{$planner->PhoneNumber}}</td>
        <td><a href="planners/{{$planner->id}}/edit">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$planners->links()}}
</div>
@endsection