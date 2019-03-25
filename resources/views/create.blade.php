@extends('layouts.app')

@section('content')
<div class="card-body">

  <form action="{{url('store')}}" method="post">
@csrf
  <div class="form-group">
    <input type="submit"  class="form-control btn btn-primary" value="Reserver">
  </div>
</div>

@endsection
