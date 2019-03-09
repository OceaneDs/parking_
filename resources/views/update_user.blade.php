@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('update') }}">
  @csrf
  <input type="hidden" name="user" value="{{$user}}">
 <div class="input-group">
   <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">
   @if ($errors->has('name'))
       <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('name') }}</strong>
       </span>
   @endif
 </div>

 <div class="input-group">
   <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
   @if ($errors->has('first_name'))
       <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('first_name') }}</strong>
       </span>
   @endif
 </div>

 <div class="input-group">
   <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
   @if ($errors->has('email'))
       <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('email') }}</strong>
       </span>
   @endif
 </div>

 <div class="input-group">
   <input id="adress" type="text" class="form-control" name="adress" value="{{ $user->adress }}">
   @if ($errors->has('adress'))
       <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('adress') }}</strong>
       </span>
   @endif
 </div>

 <div class="input-group">
   <input id="zip_code" type="number" class="form-control" name="zip_code" value="{{ $user->zip_code }}">
   @if ($errors->has('zip_code'))
       <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('zip_code') }}</strong>
       </span>
   @endif
 </div>

 <div class="input-group">
   <input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}">
   @if ($errors->has('city'))
       <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('city') }}</strong>
       </span>
   @endif
 </div>

 <div class="input-group">
   <input id="phone" type="number" class="form-control" name="phone" value="{{ $user->phone }}">
   @if ($errors->has('phone'))
       <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('phone') }}</strong>
       </span>
   @endif
 </div>

 <div class="input-group">
   <input id="type" type="text" class="form-control" name="type" value="{{ $user->type }}">
   @if ($errors->has('type'))
       <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('type') }}</strong>
       </span>
   @endif
 </div>

 <div class="form-group row mb-0">
     <div class="col-md-6 offset-md-4">
         <button type="submit" class="btn btn-primary">
             {{ __('Modifier') }}
         </button>
     </div>
 </div>

</form>
@endsection
