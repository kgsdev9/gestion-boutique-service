@extends('layout.app')

@section('content')

<div class="main main-app p-3 p-lg-4">
<div class="row">

    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
    <div class="blog grid-blog flex-fill">
    <div class="blog-image">
   <img class="img-fluid" src="{{asset('logo/rapport.jpg')}}" alt="Publier une image">

    </div>
    <div class="blog-content">
    <ul class="entry-meta meta-item">
    <li>
    <div class="post-author">

    <span>

    <span class="post-date">
        RAPPORT DE COMMANDE
    </span>
    </span>

    </div>
    </li>
    </ul>
    <h3 class="blog-title"><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Génerer un Rapport sur les commandes  </font></font></a></h3>
    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Nous vous enverrons un email contenant un piece jointe des differents commande  de la plateforme
    </font></font></p>
    </div>
    <div class="row">
    <div class="edit-options">
    <div >
        <a href="{{route('send.email')}}" class="btn">
            <img src="assets/img/icons/invoices-icon5.png" alt="" class="me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Générer un rapport
            </font></font></a>

    </div>

    </div>
    </div>
    </div>
    </div>



    <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
    <div class="blog grid-blog flex-fill">
    <div class="blog-image">
        <img class="img-fluid" src="{{asset('logo/login-registration.png')}}" alt="Publier une image" style="height:180px;">
    </div>
    <div class="blog-content">
    <ul class="entry-meta meta-item">
    <li>
    <div class="post-author">
    <span class="post-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">RAPPORT D'UTILISATEUR </font></font></span>

    </div>
    </li>
    </ul>
    <h3 class="blog-title"><a href="blog-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Génerer un rapport d'utilisateur </font></font></a></h3>
    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nous vous enverrons un email contenant un piece jointe des differents utilisateurs de la plateforme </font></font></p>
    </div>
    <div class="row">
    <div class="edit-options">
        <div >
            <a href="#" class="btn">
                <img src="assets/img/icons/invoices-icon5.png" alt="" class="me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Générer un rapport
                </font></font></a>

        </div>

    </div>
    </div>
    </div>
    </div>

    </div>
</div>

@endsection
