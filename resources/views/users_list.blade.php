@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <h2>Liste des utilisateurs</h2>
    <div class="table-responsive-md">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Ville</th>
            <th scope="col">Numéros de téléphone</th>
            <th scope="col">Type</th>
            <th scope="col">Option</th>
            <th scope="col">Créé le</th>
            <th scope="col">Dernière Modification</th>
          </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
          <td> {{ $user->name }} </td>
          <td> {{ $user->first_name }} </td>
          <td> {{ $user->email }} </td>
          <td> {{ $user->adress }} </td>
          <td> {{ $user->zip_code }} </td>
          <td> {{ $user->city }} </td>
          <td> {{ $user->phone }} </td>
          <td> {{ $user->type }} </td>
          <td>
            <h5>
            @if ($user->valid)
              <a class="text-success"  href="{{ route('user.valid', $user) }}" > Validé </a>

            @else
              <a class="text-muted" href="{{ route('user.valid', $user->id) }}" > Non Validé </a>
            @endif

            <a href="{{ route('user.edit', $user) }}"> Modifier </a>
            </h5>
          </td>
          <td> <?php $str = $user->created_at ?> {{date("d/m/Y", strtotime($str))}} </td>
          <td> <?php $str = $user->updated_at ?> {{date("d/m/Y", strtotime($str))}} </td>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
