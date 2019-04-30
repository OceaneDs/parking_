@extends('layouts.app')

@section('content')
<div class="card-body">
@csrf
  <h2><center>  <a class="text-success"  href="{{ route('creation') }}" > Reserver une place </a></center></h2>

</div>

@endsection
