<!DOCTYPE html>
<html Lang="en">
<head>
  <meta charset="utf-8">
  <title>Places</title>
</head>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<body>
  <nav class="nav nav-pills nav-fill">
  <a class="nav-item nav-link active" href="{{action("HomeController@index")}}">Accueil</a>
  <a class="nav-item nav-link" href="{{action("PlaceController@listPlaces")}}">Liste des Places</a>
  <a class="nav-item nav-link" href="#">Link</a>
</nav>
@yield('content')

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
