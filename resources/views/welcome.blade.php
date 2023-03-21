

@extends('layout.app')

@section('content')

<div class="content container-fluid">
    <div class="page-header">
    <div class="row">
    <div class="col-sm-12">
    <div class="page-sub-header">
    <h3 class="page-title">Bienvenue Admin!</h3>
    </div>
    </div>
    </div>
       </div>


    <div class="row">
    <div class="col-xl-6 col-sm-6 col-12 d-flex">
    <div class="card bg-comman w-100">
    <div class="card-body">
    <div class="db-widgets d-flex justify-content-between align-items-center">
    <div class="db-info">
    <h6>Total Commande </h6>
    <h3>{{$countCommande    }}</h3>
    </div>

    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-sm-6 col-12 d-flex">
    <div class="card bg-comman w-100">
    <div class="card-body">
    <div class="db-widgets d-flex justify-content-between align-items-center">
    <div class="db-info">
    <h6>Total Utilisateur </h6>
    <h3>{{$countUser}}</h3>
    </div>
   
    </div>
    </div>
    </div>
    </div>
    </div>



@endsection
