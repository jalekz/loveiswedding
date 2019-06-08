@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>Planners</h1>
</div>
<div class="container">
  <tables-component url="planners"></tables-component>
  {{$planners->links()}}
</div>
@endsection