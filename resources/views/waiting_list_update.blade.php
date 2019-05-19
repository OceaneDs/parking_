@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h2><center> Edition de la liste d'attente:</center></h2>
            <div class="card">


                  <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Rang</th>
                          <th scope="col">Nom</th>
                          <th scope="col">Nouveau rang</th>
                          <th scope="col">Option</th>
                        </tr>
                      </thead>
                      @foreach ($users as $user)
                      <tbody>
                        <tr>
                          <td>N° {{ $user->rank }}</td>
                          <td> {{ $user->name.' '.$user->first_name }} </td>
                          <td>
                            <form method="POST" action="{{ route('waitingList.update', $user) }}">
                               @csrf
                               

                                   <div class="col-md-6">
                                       <input type="text" name="rank" maxlength="3">
                                   </div>


                               <div class="form-group row mb-0">
                                   <div class="col-md-6 offset-md-4">
                                       <button type="submit" class="btn btn-primary">
                                           {{ __('Modifier') }}
                                       </button>
                                   </div>
                               </div>
                              </form>
                          </td>
                          <td>
                            <a href="{{ route('waitingList.delete', $user) }}" style="width:0">
                                <button type="button" class="btn btn-outline-danger">
                                    Delete
                                </button>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
              </div>

      </div>
  </div>
</div>
@endsection
