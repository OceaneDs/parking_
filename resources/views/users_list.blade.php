@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utilisateurs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($users as $user)
                    --------------------------------------------------------
                      <br>
                      Identifiant : {{ $user->id }}
                      <br>
                      Nom : {{ $user->name }}
                      <br>
                      Prénom : {{ $user->first_name }}
                      <br>
                      email : {{ $user->email }}
                      <br>
                      Adresse : {{ $user->adress }}
                      <br>
                      Code Postal : {{ $user->zip_code }}
                      <br>
                      Ville : {{ $user->city }}
                      <br>
                      Numéros de téléphone : {{ $user->phone }}
                      <br>
                      Rang : {{ $user->type }}
                      <br>
                      Créé le <?php $str = $user->created_at ?> {{date("d/m/Y", strtotime($str))}}
                      <br>
                      Dernière modification le <?php $str = $user->updated_at ?> {{date("d/m/Y", strtotime($str))}}
                      <br>

                      <h5>
                      @if ($user->valid)
                        <a class="text-success"  href="{{ route('userValid', $user) }}" > Validé </a>

                      @else
                        <a class="text-muted" href="{{ route('userValid', $user->id) }}" > Non Validé </a>
                      @endif

                      <a href="{{ route('update_user', $user) }}"> Modifier </a>
                      </h5> <br>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
