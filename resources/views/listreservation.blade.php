@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card-header">Liste des réservations</div>

<?php foreach ($reservations as $reservation): ?>
<div class="card">
  <br>
  Id reservation : {{$reservation->id}}
  <br>
  Date début: {{ $reservation->created_at }}
  <br>
  Date_fin : {{ $reservation->date_fin }}
  <br>
  ID Utilisateur : {{$reservation->user_id }}
  <br>
  ID Place : {{ $reservation->place_id }}

  <?php endforeach; ?>
</div>
</div>
</div>
</div>

@endsection
