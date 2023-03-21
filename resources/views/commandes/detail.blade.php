@extends('layout.app')

@section('content')
<div class="main main-app p-3 p-lg-4">

    <div class="content container-fluid">
        <div class="row justify-content-center">
        <div class="col-xl-10">
        <div class="card invoice-info-card">
        <div class="card-body">
        <div class="invoice-item invoice-item-one">
        <div class="row">
        <div class="col-md-6">
        <div class="invoice-logo">
        <img src="{{asset('logo/Sonaco.png')}}" alt="logo">
        </div>
        
        <div class="invoice-head">
        <h6>N° Commande : {{$orders->numero}} </h6>
        <p>Date de facture  :   {{ date("Y/m/d", strtotime($orders->date))}} </p>
        </div>
        </div>
        <div class="col-md-6">
        <div class="invoice-info">
        <strong class="customer-text-one">COMMANDE </strong>
        <h4> {{$orders->entreprise  }}</h4>
        <p class="invoice-details">
            {{$orders->emplacement   }}<br>

        </p>
        <p>Tel :      {{$orders->telephone_one }}        {{$orders->telephone_two}} </p>
        </div>
        </div>
        </div>
        </div>






        <div class="invoice-item invoice-table-wrap">
        <div class="row">
        <div class="col-md-12">
        <div class="table-responsive bordered ">
        <table class="invoice-table table table-center mb-0 bordered">
        <thead>
        <tr>
        <th>Quantité </th>
        <th>Réference </th>
        <th>Prix Unit. <br> HT</th>
        <th>Montant <br> Hors Taxes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>{{$orders->quantite}}</td>
        <td>{{$orders->reference}}</td>
        <td>{{$orders->prix}}</td>
        <td class="text-end">{{$orders->total }}</td>
        </tr>


        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>

        <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 col-md-6">
        <div class="invoice-terms">
        <h6>Notes:</h6>
        <p class="mb-0">Enter customer notes or any other details</p>
        </div>
        <div class="invoice-terms">
        <h6>Terms and Conditions:</h6>
        <p class="mb-0">Enter customer notes or any other details</p>
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="invoice-total-card">
        <div class="invoice-total-box">
        <div class="invoice-total-inner">
        <p>TOTAL HT  <span> {{$orders->total}}</span></p>
        <p>TVA <span></span></p>
        <p>TOTAL TTC  <span>{{$orders->total}}</span></p>
        <p>ARSI   <span></span></p>
        <p>NET A PAYER (CFA)  <span> {{$orders->total}}</span> </p>
        </div>

        </div>
        </div>
        </div>
        </div>
        <div class="invoice-sign text-end">
        <img class="img-fluid d-inline-block" src="{{asset('assets/img/signature.png')}}" alt="sign">
        <span class="d-block"></span>
     <a href="javascript:window.print()" class="btn btn-light">Previsualiser </a>
     <a href="{{route('recu.commande', $orders->id)}}" class="btn btn-primary">Imprimer le recu </a>


        </div>
        </div>
        </div>
        </div>
        </div>
        </div>



@endsection
