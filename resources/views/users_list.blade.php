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
                      Rang : {{ $user->type }}
                      <br>
                      Créé le <?php $str = $user->created_at ?> {{date("d/m/Y", strtotime($str))}}
                      <br>
                      Dernière modification le <?php $str = $user->updated_at ?> {{date("d/m/Y", strtotime($str))}}
                      <br>

                      @if ($user->valid)
                        <button type="button" class="btn btn-outline-success"  href="{{ route('validation')}}" onclick="event.preventDefault(); document.getElementById('valid-user').submit();" >Validé</button>

                      @else
                        <button type="button" class="btn btn-outline-primary" href="{{ route('validation')}}" onclick="event.preventDefault(); document.getElementById('valid-user').submit();"  >Non Validé</button>
                      @endif

                      <a href="update_user?user_id={{$user->id}}">modifier</a>

                      <button type="button" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('valid-user').submit();"  >Supprimer</button>
                      <br>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
