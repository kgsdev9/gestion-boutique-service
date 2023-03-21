
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>GESTION DE FACTURE </title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/feather/feather.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/icons/flags/flags.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@livewireStyles
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<h5>FACTURE</h5>
<a href="index.html" class="logo logo-small">
    FACURE
</a>
</div>

<div class="menu-toggle">
<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-bars"></i>
</a>
</div>

<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">




<li class="nav-item zoom-screen me-2">
<a href="#" class="nav-link header-nav-list win-maximize">
<img src="assets/img/icons/header-icon-04.svg" alt="">
</a>
</li>

<li class="nav-item dropdown has-arrow new-user-menus">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img">

<div class="user-text">
<h6>FACTURE  </h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Se Deconnecter</a>
</div>
</li>

</ul>

</div>

<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Tableau de bord </span>
</li>
<li>
    <a href="{{URL('/')}}"><i class="fas fa-calendar-day"></i> <span>Accueil</span></a>
    </li>
<li class="submenu">
<a href="#"> <i class="fas fa-clipboard"></i> <span> Gestion de commande </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="{{route('form.commande')}}">Nouvelle Commande </a></li>
<li><a href="{{route('gestion.commande')}}">Liste des commandes </a></li>

</ul>
</li>
<li >
<a href="{{URL('/users')}}"><i class="fas fa-chalkboard-teacher"></i> <span> Gestion d'utilisteur</span> </a>
</li>

<li>
    <a href="{{route('sommaire.rapport')}}"><i class="fas fa-baseball-ball"></i> <span>

        Rapports
    </span></a>
    </li>

</ul>
</div>
</div>
</div>




<div class="page-wrapper">
@yield('content')




<div class="col-xl-6 d-flex">


</div>



<footer>
<p>APPLICATION DE FACTURE </p>
</footer>

</div>

</div>


<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@livewireScripts
@include('sweetalert::alert')


</body>
</html>
