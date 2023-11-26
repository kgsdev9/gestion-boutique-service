<div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mb-3">
                                        <h5 class="card-title me-2">Liste des commandes </h5>
                                        <div class="ms-auto">
                                            <input type="text" class="form-control bg-light" placeholder="Search...">
                                        </div>
                                    </div>

                                    <div class="mx-n4 px-4" data-simplebar="init" style="max-height: 332px;"><div class="simplebar-wrapper" style="margin: 0px -24px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -15px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 24px;">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                                <thead>
                                                    <tr>
                                                        <th>#Invoice</th>
                                                        <th style="width: 190px;">Client</th>
                                                        <th>Télephone</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($allFactures as $facture)
                                                    <tr>

                                                        <td class="fw-semibold">#562354</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">

                                                                {{$facture->nom_client}}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            {{$facture->telephone_client}}
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-soft-success font-size-12">Payer</div>
                                                        </td>

                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Consulter</a>
                                                                    <a class="dropdown-item" href="{{route('invoice.commnde', $facture->id)}}">Télecharger</a>
                                                                    <a class="dropdown-item" href="#">Supprimer</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 419px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 263px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

                                </div>
                            </div>
                        </div>
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>


</div>





