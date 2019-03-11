@extends('layouts.master')

@section('content')
<h1>Liste des places :</h1>
<div class="col-md-6">

        <table class="table table-dark">
          <thead>
            <tr>
              <td>Place N: </td>
              <td>Disponible:</td>
              <td>Action:</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($places as $place): ?>
          <tr>
            <td>{{$place->numéro}}</td>
            <td>{{$place->dispo}}</td>
            <td><button type="button" class="btn btn-outline-light">Dispo</button>
              <button type="button" class="btn btn-outline-light">Indispo</button> </td>
          </tr>
        </tbody>
    <?php endforeach; ?>
  </div>
@endsection
