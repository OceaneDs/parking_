@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tableau de bord</div>
                <div class="card-body">
                  @include('flash::message')
                  @if ( !empty($user->rank) )
                    <h5> Vous êtes en liste d'attente au rang {{ $user->rank}} </h5>
                  @endif
                  @if ( !empty($user->reservationNow()->place->numéro) )
                    <h5> Votre place de parking est la numéro {{ $user->reservationNow()->place->numéro }}
                      et prendra fin le {{ Carbon\Carbon::parse($user->reservationNow()->date_fin)->format('d/m/Y')}} </h5>
                  @else
                    <h5> Vous n'avez actuellement aucune place de parking et vous n'êtes pas en liste d'attente.  </h5>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
