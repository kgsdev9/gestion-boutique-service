<div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">


                    <div class="col-xl-12 col-lg-8">

                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <h5>Ma boutique </h5>
                                                <ol class="breadcrumb p-0 bg-transparent mb-2">
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                                    <li class="breadcrumb-item active">Boutique</li>
                                                </ol>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-inline float-md-end">
                                                <div class="search-box ms-2">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Chercher...">
                                                        <i class="bx bx-search search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#popularity" role="tab" aria-selected="false">Mes articles </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#newest" role="tab" aria-selected="false">Mon Panier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#discount" role="tab" aria-selected="true">Commander</a>
                                        </li>
                                    </ul>

                                      <!-- Tab panes -->
                                        <div class="tab-content p-3 text-muted">
                                            <div class="tab-pane active" wire:ignore.self id="popularity" role="tabpanel">
                                                <div class="row">
                                                    @php $total = 0 @endphp
                                                    @foreach ($allArticles as $article)

                                                    @php $total += $article['price'] * $article['quantity'] @endphp
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="product-box rounded p-3 mt-4">
                                                            <div class="pricing-badge">
                                                                <span class="badge bg-danger"> 20 %</span>
                                                            </div>
                                                            <div class="product-img bg-light p-3 rounded">
                                                                <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                            <div class="product-content pt-3">
                                                                <p class="text-muted font-size-13 mb-0">Gray, Chair</p>
                                                                <h5 class="mt-1 mb-0"><a href="#" class="text-dark font-size-16">{{$article->nom}}</a></h5>

                                                                <button  wire:click="add({{$article->id}})" class="product-buy-icon bg-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ajouter au panier">
                                                                    <i class="mdi mdi-cart-outline text-white font-size-16"></i>
                                                                </button>
                                                                <h5 class="font-size-20 text-primary mt-3 mb-0">{{$article->prix}}FCFA

                                                                </h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>

                                            <div class="tab-pane" id="newest" wire:ignore.self role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        <div class="card">
                                                            <div class="card-body">

                                                                <div class="table-responsive">
                                                                    <table class="table align-middle mb-0 table-nowrap mb-0">

                                                                        <thead class="table-light">
                                                                            <tr>
                                                                                <th>Product</th>
                                                                                <th>Product Name</th>
                                                                                <th style="width: 120px;">Price</th>
                                                                                <th>Quantity</th>
                                                                                <th>Total</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @php $total = 0 @endphp
                                                                            @foreach( (array)session('cart') as $id => $details)
                                                                            @php $total += $details['price'] * $details['quantity'] @endphp

                                                                            <tr>                                                                                    <th><img src="{{Storage::url($details['image'])}}" alt="" class="avatar-lg rounded p-1"></th>
                                                                                <td>
                                                                                    <div>
                                                                                        <h5 class="text-truncate font-size-16"><a href="ecommerce-product-detail.html" class="text-dark">Sofa Home Chair Black</a></h5>

                                                                                        <p class="mb-0 mt-1">Categorie : <span class="fw-medium">Accesoires</span></p>
                                                                                    </div>
                                                                                </td>
                                                                                <td>{{$details['price']}} FCFA </td>
                                                                                <td>
                                                                                    <div class="d-inline-flex">
                                                                                        {{ $details['quantity']}}

                                                                                    </div>
                                                                                </td>
                                                                                <td>{{ $details['price'] * $details['quantity'] }} FCFA</td>
                                                                                <td>
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <button  type="button" wire:click="delete({{$details['articleId']}})" ><i class="bx bx-trash-alt font-size-18"></i></button>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="px-2 text-primary" data-bs-original-title="Like" aria-label="Like"><i class="bx bx-heart font-size-18"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach


                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end card -->


                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="mt-5 mt-lg-0">
                                                            <div class="card">
                                                                <div class="card-header bg-transparent border-bottom py-3 px-4">
                                                                    <h5 class="font-size-16 mb-0">Sommaire <span class="float-end">#MN0124</span></h5>
                                                                </div>
                                                                <div class="card-body p-4 pt-2">

                                                                    <div class="table-responsive">
                                                                        <table class="table mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Taxe :</td>
                                                                                    <td class="text-end">0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Paiement  : </td>
                                                                                    <td class="text-end">Cash</td>
                                                                                </tr>

                                                                                <tr class="bg-light">
                                                                                    <th>Total :</th>
                                                                                    <td class="text-end">
                                                                                        <span class="fw-bold">
                                                                                            <strong>{{ $total }}FCFA </strong>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end table-responsive -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="discount" wire:ignore.self role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <ol class="activity-checkout mb-0 px-4 mt-2">
                                                                    <li class="checkout-item">
                                                                        <div class="avatar checkout-icon p-1">
                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                <h5 class="text-white font-size-16 mb-0">01</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="feed-item-list">
                                                                            <div>
                                                                                <h5 class="font-size-16 mb-1">Information sur le client </h5>
                                                                                <p class="text-muted text-truncate mb-4">Entrer les informations sur le client </p>
                                                                                <div class="mb-3">
                                                                                    <form wire:submit.prevent="confirmOrder">
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div class="col-lg-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="billing-name">Nom du client </label>
                                                                                                        <input type="text" wire:model="nom_client" class="form-control" id="billing-name" placeholder="Entrer le nom du client ">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="billing-email-address">Télephone client </label>
                                                                                                        <input type="text" wire:model="telephone_client" class="form-control"  placeholder="Télephone client ">
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                            <div class="md-3">
                                                                                            <label for="">Email client</label>
                                                                                                <input type="email" class="form-control" placeholder="email du client" wire:model="email_client">
                                                                                            </div>

                                                                                            <div class="mb-3">
                                                                                                <label class="form-label" for="billing-address">Adresse client </label>
                                                                                                <textarea class="form-control" wire:model="adresse_client" id="billing-address" rows="3" placeholder="Entrer l'adresse du client"></textarea>
                                                                                            </div>

                                                                                            <div class="row my-4">
                                                                                                <div class="col">
                                                                                                    <button type="submit" class="btn btn-success">
                                                                                                        <i class="mdi mdi-arrow-left me-1"></i>Confirmer la commande  </button>
                                                                                                </div> <!-- end col -->

                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="checkout-item">
                                                                        <div class="avatar checkout-icon p-1">
                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                <h5 class="text-white font-size-16 mb-0">02</h5>
                                                                            </div>
                                                                        </div>

                                                                    </li>

                                                                </ol>
                                                            </div>
                                                        </div>




                                                        <!-- end row-->
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="card checkout-order-summary">
                                                            <div class="card-body">
                                                                <div class="p-3 bg-light mb-3">
                                                                    <h5 class="font-size-16 mb-0">Sommaire commande</h5>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table class="table align-middle mb-0 table-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="border-top-0" style="width: 90px;" scope="col">Product</th>
                                                                                <th class="border-top-0" scope="col">Product Desc</th>
                                                                                <th class="border-top-0" scope="col">Price</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @php $total = 0 @endphp
                                                                            @foreach( (array)session('cart') as $id => $details)
                                                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                                                            <tr>
                                                                                <th scope="row"><img src="{{Storage::url($details['image'])}}" alt="product-img" title="product-img" class="avatar-md"></th>
                                                                                <td>
                                                                                    <h5 class="font-size-15 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">{{ $details['name']}}</a></h5>
                                                                                    <p class="text-muted mb-0">Prix{{$details['price']}} </p>
                                                                                    <p class="text-muted mb-0"> Quantite {{ $details['quantity']}} </p>
                                                                                </td>
                                                                                <td> {{ $details['price'] * $details['quantity'] }} FCFA </td>
                                                                            </tr>
                                                                            @endforeach
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <h5 class="font-size-14 m-0">Total :</h5>
                                                                                </td>
                                                                                <td>
                                                                                {{$total}}
                                                                                </td>
                                                                            </tr>


                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script>2023 © webadmin.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesdesign.com/" target="_blank" class="text-reset">Themesdesign</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
