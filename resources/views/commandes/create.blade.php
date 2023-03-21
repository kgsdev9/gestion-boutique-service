@extends('layout.app')

@section('content')

    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <div class="card comman-shadow">
            <div class="card-body">
            <form action="{{$action}}" method="{{$methode}}">
                @csrf
            <div class="row">
            <div class="col-12">
            <h5 class="form-title student-info">Information de la commande  <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as  $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>

                </div>
                @endif
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Numero de la commande <span class="login-danger">*</span></label>
            <input class="form-control" type="text"  value="{{$random}}" name="numero">
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Libellé Entreprise <span class="login-danger">*</span></label>
            <input class="form-control" type="text" placeholder="CARGILL COCOA SARL" name="entreprise" value="{{old('entreprise')}}">
            </div>
            </div>

            <div class="col-12 col-sm-4">
            <div class="form-group local-forms calendar-icon">
            <label>Date de facturation   <span class="login-danger">*</span></label>
            <input class="form-control datetimepicker" name="date"   type="date" placeholder="DD-MM-YYYY" value="{{old('date')}}">
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Prix Unitaire  </label>
            <input class="form-control" type="number" placeholder="23000" name="prix"  value="{{old('prix')}}">
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Quantité de la commande  <span class="login-danger">*</span></label>
            <input class="form-control" type="number" placeholder="300" name="quantite"  value="{{old('quantite')}}">

        </span>
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>E-mail de l'entreprise  <span class="login-danger">*</span></label>
            <input class="form-control" type="email"  placeholder="exemple@gmail.com" name="email" value="{{old('email')}}">

            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Réference de la commande  <span class="login-danger">*</span></label>
            <textarea rows="4" cols="5" class="form-control" placeholder="Réference de la commande " name="reference"> {{old('reference')}}</textarea>
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Emplacement entreprise  <span class="login-danger">*</span></label>
            <textarea rows="4" cols="5" class="form-control" placeholder="Emplacement " name="emplacement">  {{old('emplacement')}}</textarea>
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
            <input class="form-control" type="text" placeholder="23 45 61 50"  name="telephone_one" value="{{old('telephone_one')}}">
            </div>
            </div>
            <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Fixe </label>
            <input class="form-control" type="text"  placeholder="23 45 61 50"  name="telephone_two" value="{{old('telephone_two')}}">
            </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                <label>Délai de règlement </label>
                <input class="form-control" type="date"    name="delai" value="{{old('delai')}}">
                </div>
                </div>

            <div class="col-12">
            <div class="student-submit">
            <button type="submit" class="btn btn-primary">Enregistrer la commande </button>
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
