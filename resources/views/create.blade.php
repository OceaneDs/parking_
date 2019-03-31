@extends('layouts.app')

@section('content')
<div class="card-body">
@csrf
    <a class="text-success"  href="{{ route('creation') }}" > Reservation place </a>

</div>

@endsection
