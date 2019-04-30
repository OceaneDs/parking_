@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card-header">Historique des réservations</div>
<div class="card-body">
  <?php $users = DB::table('users')->get();
  $reservations = DB::table('reservations')->get()?>
  @foreach ($users as $user)
    <div class="card">
      <br>
      Nom Utilisateur : {{$user->first_name}}
      @foreach ($reservations as $reservation)

      <br>
      Date début: {{ $reservation->created_at }}
      <br>
      Date_fin : {{ $reservation->date_fin }}
      <br>
      ID Utilisateur : {{$reservation->user_id }}
      <br>
      ID Place : {{ $reservation->place_id }}
      @endforeach
    @endforeach

</div>
</div>
</div>
</div>
</div>
@endsection
