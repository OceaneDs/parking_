@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form method="POST" action="{{ route('update', $user) }}">
          @csrf

          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required>

                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

              <div class="col-md-6">
                  <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ $user->first_name }}" required>

                  @if ($errors->has('first_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse E-Mail') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

         <div class="form-group row">
             <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nouveau mot de passe (champ non obligatoire)') }}</label>

             <div class="col-md-6">
                 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                 @if ($errors->has('password'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('password') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         <div class="form-group row">
             <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation du nouveau mot de passe') }}</label>

             <div class="col-md-6">
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
             </div>
         </div>

         <div class="form-group row">
             <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

             <div class="col-md-6">
                 <input id="adress" type="text" class="form-control{{ $errors->has('adress') ? ' is-invalid' : '' }}" name="adress" value="{{ $user->adress }}" required>

                 @if ($errors->has('adress'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('adress') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         <div class="form-group row">
             <label for="zip_code" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label>

             <div class="col-md-6">
                 <input id="zip_code" type="text" class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}" name="zip_code" value="{{ $user->zip_code }}" required>

                 @if ($errors->has('zip_code'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('zip_code') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         <div class="form-group row">
             <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

             <div class="col-md-6">
                 <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->city }}" required>

                 @if ($errors->has('city'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('city') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         <div class="form-group row">
             <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Numéro de téléphone') }}</label>

             <div class="col-md-6">
                 <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->phone }}" required>

                 @if ($errors->has('phone'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('phone') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         <div class="form-group row">
             <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

             <div class="col-md-6">
                 <input id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ $user->type }}" required>

                 @if ($errors->has('type'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('type') }}</strong>
                     </span>
                 @endif
             </div>
         </div>

         <div class="form-group row mb-0">
             <div class="col-md-6 offset-md-4">
                 <button type="submit" class="btn btn-primary">
                     {{ __('Modifier') }}
                 </button>
             </div>
         </div>
        </form>
      </div>
    </div>
  </div>
@endsection
