@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center mb-3">Historique des réservations</div>

  <?php $users = DB::table('users')->get();
  $reservations = DB::table('reservations')->get()?>
    @foreach ($users as $user)
      <li class="list-group-item d-flexalign-items-center">
      <b>{{$user->name}}</b> a eu les places :
      @foreach ($reservations as $reservation)
        <li class="list-group-item">
          N° : <b>{{$reservation->place_id}}</b> du {{$reservation->created_at}} au {{$reservation->date_fin}}
        </li>
      @endforeach
    </li>
    @endforeach

</div>
</div>
</div>
</div>

@endsection
