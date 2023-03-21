@extends('layout.app')

@section('content')

    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <div class="card comman-shadow">
            <div class="card-body">
            <form action="{{$action}}" method="{{$methode}}">
                @csrf
                @method('PATCH')
            <div class="row">
            <div class="col-12">
            <h5 class="form-title student-info">Edition  de la commande  <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Numero de la commande <span class="login-danger">*</span></label>
            <input class="form-control" type="text"  value="{{$ressource->numero}}" disabled="disabled"  name="numero">
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Libellé Entreprise <span class="login-danger">*</span></label>
            <input class="form-control" type="text" placeholder="CARGILL COCOA SARL" name="entreprise" value="{{$ressource->entreprise}}">
            </div>
            </div>

            <div class="col-12 col-sm-4">
            <div class="form-group local-forms calendar-icon">
            <label>Date de la commande  <span class="login-danger">*</span></label>
            <input class="form-control datetimepicker" name="date"   type="date" placeholder="DD-MM-YYYY" value="{{$ressource->date}}">
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Prix Unitaire  </label>
            <input class="form-control" type="number" placeholder="23000" name="prix"  value="{{$ressource->prix}}">
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Quantité de la commande  <span class="login-danger">*</span></label>
            <input class="form-control" type="number" placeholder="300" name="quantite"  value="{{$ressource->quantite}}">

        </span>
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>E-mail de l'entreprise  <span class="login-danger">*</span></label>
            <input class="form-control" type="email"  name="email" value="{{$ressource->email}}">

            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Réference de la commande  <span class="login-danger">*</span></label>
            <textarea rows="4" cols="5" class="form-control" placeholder="Réference de la commande " name="reference"> {{$ressource->reference}}</textarea>
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Emplacement entreprise  <span class="login-danger">*</span></label>
            <textarea rows="4" cols="5" class="form-control" placeholder="Emplacement " name="emplacement"> {{$ressource->emplacement}}</textarea>
            </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group students-up-files">
                    <label>Logo de l'entreprise  (150px X 150px)</label>
                    <div class="uplod">
                    <label class="file-upload image-upbtn mb-0">
                    Choose File <input type="file" name="logo" >
                    </label>
                    </div>
                    </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Télephone </label>
            <input class="form-control" type="text"  name="telephone_one" value="{{$ressource->telephone_one}}">
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Fixe </label>
            <input class="form-control" type="text"   name="telephone_two"  value="{{$ressource->telephone_two}}">
            </div>
            </div>

            <div class="col-12">
            <div class="student-submit">
            <button type="submit" class="btn btn-primary">Enregistrer les modifications </button>
            </div>
            </div>
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
