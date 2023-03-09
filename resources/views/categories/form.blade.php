@extends('layout.app')

@section('content')
        
    
<div class="main main-app p-3 p-lg-4">

      <div class="card card-settings">
        <div class="card-header">
          <h5 class="card-title">Nouvelle catégorie </h5>
        </div><!-- card-header -->
        <div class="card-body p-0">
          <div class="setting-item">
            <div class="row g-2 align-items-center">
              <div class="col-md-5">
                <h6>Nom de la catégorie </h6>
                <p>@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif</p>
              </div><!-- col -->


              <div class="col-md">
                <form action="{{$action}}"  method="{{$methode}}" >
      @csrf
              <input type="text" class="form-control"  name="nom" value="{{old('nom')}}">
              </div><!-- col -->
            </div><!-- row -->
            <br>
            <button class="btn btn-dark"
        type="submit">
   Enregistrer la categorie 
</button>
          </div><!-- setting-item -->

          </form>
        </div><!-- card-body -->
      </div><!-- card -->

@endsection