@extends('layout.app')

@section('content')


<div class="main main-app p-3 p-lg-4">


    <div class="card card-settings">
        <div class="card-header">
          <h5 class="card-title">Edition de  produit </h5>
        </div><!-- card-header -->
        <form action="{{$action}}"  method="{{$method}}" >
          @csrf
    @method('PATCH')
        <div class="card-body p-0">
          <div class="setting-item">
            <div class="row g-2 align-items-center">
              <div class="col-md-5">
                <h6>Désignation </h6>
              </div><!-- col -->
              <div class="col-md">
               <input type="text" class="form-control"  name="designation" value="{{$ressource->designation}}">
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- setting-item -->
          <div class="setting-item">
            <div class="row g-2">
              <div class="col-md-5">
                <h6>Prix du produit </h6>
                <p></p>
              </div><!-- col -->
              <div class="col-md">
              <input type="text" class="form-control"  name="prix" value="{{$ressource->prix }}">
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- setting-item -->
       
          <div class="setting-item">
            <div class="row g-2">
              <div class="col-md-5">
                <h6>Catégorie du produit </h6>
                <p></p>
              </div><!-- col -->
              <div class="col-md">
             <select id="monselect" class="form-control" name="categorie">
        @foreach($colllectionCategorie as $value)
    <option value="{{$value->id}}"> {{$value->nom}}</option>
    @endforeach
    </select>

              </div><!-- col -->
            </div><!-- row -->
                <button class="btn btn-dark"
        type="submit">
   Enregistrer les modifications  
</button>
          </div><!-- setting-item -->
          </form>
        </div><!-- card-body -->
      </div><!-- card -->

	
	
@endsection