@extends('layout.app')

@section('content')

<div class="main main-app p-3 p-lg-4">
    <div class="d-md-flex align-items-center justify-content-between mb-4">
        <div>
          <h4 class="main-title mb-0">Liste des clients </h4>
        </div>
        <div class="d-flex align-items-center gap-4 mt-3 mt-md-2">
           <input type="text" name="name" class="form-control" placeholder="rechercher un client....">
            <a href="{{route('client.form')}}">Nouveau client </a>

             <a href="{{route('client.impression')}}">Télecharger le rapport  </a>


            
        </div>
      </div>
      <div class="card card-one mt-3">
        <div class="card-body p-3">
          <div class="table-responsive">
            <table class="table table-four table-bordered">
              <thead>
                  <th>Nom </th>
                  <th>Prénom</th>
                  <th>E-mail</th>
                  <th>Adresse</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($ressourceClient as $value)
                <tr>
                  <td>{{$value->nom}}</td>
                  <td>{{$value->prenom}}</td>
                  <td>{{$value->email}}</td>
                  <td>{{$value->adresse}}</td>
                  <td>{{$value->created_at->diffForHumans()}}</td>
                  <td>
                    <a href="{{route('edit.client', $value->id)}}" class="text-dark">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a href="{{route('client.delete', $value->id)}}" class="text-dark" onclick="return confirm('voulez-vous vraiment supprimer ?')">
                     <i class="fa-solid fa-trash-can"></i>
                    </a>

                      <a href="{{route('client.show', $value->id)}}" class="text-dark">
                       <i class="fa-regular fa-eye"></i>
                    </a>

                 
                  
                  </td>
                </tr>
                 @endforeach
              </tbody>
            </table>
          </div>
        </div><!-- card-body -->
          {{$ressourceClient->links()}}
      </div>
    </div>


@endsection