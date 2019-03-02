@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

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
                      Validé : {{ $user->valid }}
                      <br>
                      Rang : {{ $user->type }}
                      <br>
                      Créé le <?php $str = $user->created_at ?> {{date("d/m/Y", strtotime($str))}}
                      <br>
                      Dernière modification le <?php $str = $user->updated_at ?> {{date("d/m/Y", strtotime($str))}}

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
