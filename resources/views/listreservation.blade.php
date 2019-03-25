@extends('layouts.master')

@section('content')
<h1>Liste des reservations :</h1>
<div class="col-md-6">

        <table class="table table-dark">
          <thead>
            <tr>
              <td>id reservation </td>
              <td>Date début:</td>
              <td>Date fin:</td>
              <td>ID utilisateur:</td>
              <td>ID Place:</td>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($reservations as $reservation): ?>
          <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->created_at}}</td>
            <td>{{$reservation->date_fin}}</td>
            <td>{{$reservation->user_id}}</td>
            <td>{{$reservation->place_id}}</td>

          </tr>
        </tbody>
    <?php endforeach; ?>
  </div>
@endsection
