<div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title">Liste des commandes </h5>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                                <div>

                                    <button wire:click="displayForm"  class="btn btn-primary"><i class="bx bx-plus me-1"></i>Nouvelle Commande </button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                    @if($mode == false)

                    <div class="row mt-2">
                        @foreach ($allFactures as $facture)
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="bx bx-dots-horizontal text-muted font-size-20"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Consulter</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Supprimer</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">{{$facture->nom_client}}</a></h5>
                                            <span class="badge badge-soft-success mb-0">Facture</span>
                                        </div>
                                    </div>

                                    <p class="text-muted mt-3 mb-0">Curabitur non magna lobortis tempus gravida ornare libero sed diam sed fringilla est.</p>

                                    <div class="mt-3 pt-1">
                                        <p class="mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i>
                                            {{$facture->telephone_client}}</p>
                                        <p class="mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i>
                                            {{$facture->email_client}}</p>
                                        <p class="mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                            {{$facture->adresse_client}}</p>
                                    </div>

                                    <div class="d-flex gap-2 pt-4">
                                        <a   href="{{route('detail.commnde', $facture->id)}}" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i>Consulter </a>
                                        <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-message-square-dots me-1"></i> Contact</button>
                                    </div>


                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        @endforeach




                    </div>
                    <!-- end row -->

                    <div class="row g-0 align-items-center pb-3">
                        <div class="col-sm-6">
                            <div>
                                <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-end">
                                <ul class="pagination mb-sm-0">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @elseif($mode == true)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Nouvelle Commande </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="mt-4 mt-xl-0">

                                                <form>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-firstname-input">Nom du client </label>
                                                        <input type="text" class="form-control" placeholder="Entrer votre nom" wire:model="nom_client">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="formrow-firstname-input">Adresse du client  </label>
                                                        <input type="text" class="form-control" placeholder="Adresse client" wire:model="adresse_client">
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ms-lg-auto">
                                            <div class="mt-5 mt-lg-4 mt-xl-0">
                                                    <div class="row mb-4">
                                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Télephone client </label>
                                                        <div class="col-sm-9">
                                                          <input type="text" class="form-control" placeholder="+2250768365866" wire:model="telephone_client">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email Client </label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" placeholder="kahouoguystephane@gmail.com" wire:model="email_client">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>Cocher les produits de votre boutique correspodant à la commande </h5>

                                        <form class="row row-cols-lg-auto gx-3 gy-2 align-items-center">

                                            <div class="row">
                                                @foreach ($allArticles as $article)
                                                <div class="col-md-3">
                                                    <label for="">{{$article->nom}} - {{$article->prix}} FCFA </label>
                                                    <input type="checkbox" wire:model="article_id" value="{{$article->id}}">

                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="mt-4">
                                                <button type="button" wire:click="create" class="btn btn-primary w-md">Enregistrer la commande </button>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
</div>





