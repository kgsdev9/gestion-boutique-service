@extends('layout.app')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="font-size-15">Bilan des services  </h6>
                                    <h4 class="mt-3 pt-1 mb-0 font-size-22">1234  </h4>
                                </div>

                            </div>
                        </div>
                        <div class="icon text-center">
                            <a href="#" class="btn btn-outline dark">Consulter la liste  <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="mb-0 font-size-15">Bilan du mois </h6>
                                    <h4 class="mt-3 mb-0 font-size-22">63 099900  FCFA   </h4>

                                </div>

                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-money font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="icon text-center">
                                <a href="#" class="btn btn-outline dark">Consulter la liste  <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="mb-0 font-size-15">Bilan tous les services du mois</h6>
                                    <h4 class="mt-3 mb-0 font-size-22">{{$allTransactionSommeWithMounth}} FCFA </h4>
                                    </div>


                            </div>
                        </div>
                        <div>
                            <div class="icon text-center">
                                <a href="{{route('transaction.repport.mountly')}}" class="btn btn-outline dark">Consulter la liste  <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="mb-0 font-size-15">Bilan Commande </h6>
                                    <h4 class="mt-3 mb-0 font-size-22">47658 FCFA   </h4>
                                </div>

                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-chart font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="icon text-center">
                                <a href="#" class="btn btn-outline dark">Consulter la liste  <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ROW -->





            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                    <thead>
                                        <tr>
                                            <th style="width: 90px;">
                                              Image
                                            </th>
                                            <th  style="width: 210px;">Libélllé</th>
                                            <th>Prix</th>
                                            <th>Catégorie </th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allLatestProduct as $value)
                                        <tr>
                                            <td>
                                                <div class="avatar">
                                                    <div class="product-img avatar-title img-thumbnail bg-soft-primary border-0">
                                                        <img src="{{Storage::url($value->image)}}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">{{$value->nom}}</td>
                                            <td>
                                              {{$value->prix}} FCFA
                                            </td>
                                            <td>
                                                {{$value->marque->nom}}
                                            </td>


                                            <td><span class="badge badge-soft-primary font-size-12">Pending</span></td>

                                            <td>
                                              <a href="#"><i class="mdi mdi-eye-outline font-size-18 text-muted"></i></a>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
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

 @endsection
