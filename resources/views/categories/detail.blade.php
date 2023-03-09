@extends('layout.app')

@section('content')

<div class="container">
    <div class="main-body" style="margin-top:30px;">
    
     
          <div class="row gutters-sm">
            <div class="col-md-4 mb-5">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-4">
                      <h4>{{$ressource->prenom}}</h4>
                      <p class="text-secondary mb-1">Profession</p>
                     
                    
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom du client : </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$ressource->nom}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prenom du client </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{$ressource->prenom}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">E-mail du client  </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{$ressource->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Adresse du domicile </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{$ressource->adresse}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date de creation </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{$ressource->created_at->diffForHumans()}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="#">Button </a>
                    </div>
                  </div>
                </div>
              </div>




@endsection