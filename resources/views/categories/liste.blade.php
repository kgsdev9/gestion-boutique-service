@extends('layout.app')

@section('content')




<div class="main main-app p-3 p-lg-4">
   <div class="d-md-flex align-items-center justify-content-between mb-4">
        <div>
          <h4 class="main-title mb-0">Liste des Catégories </h4>
        </div>
        <div class="d-flex align-items-center gap-4 mt-3 mt-md-2">
        
            <a href="{{route('category.form')}}">Nouvelle catégorie  </a>

  
        </div>
      </div>
<div class="card card-one mt-3">
        <div class="card-body p-3">
          <div class="table-responsive">
            <table class="table table-four table-bordered">
              <thead>
                  <th>Nom de la catégorie </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($ressource as $value)
                <tr>
                  <td>{{$value->nom}}</td>
                  <td>
                    
                       <a href="{{route('categorie.edit', $value->id)}}" class="text-dark">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a href="{{route('categorie.destroy', $value->id)}}" class="text-dark" onclick="return confirm('voulez-vous vraiment supprimer ?')">
                     <i class="fa-solid fa-trash-can"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
        
              </tbody>
            </table>
          </div>
        </div><!-- card-body -->
      </div>

      </div>


@endsection