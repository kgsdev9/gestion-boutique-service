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
                                    <h6 class="font-size-15">Total Commande </h6>
                                    <h4 class="mt-3 pt-1 mb-0 font-size-22">1234  </h4>
                                </div>
                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-store-alt font-size-24 mb-0 text-primary"></i>
                                        </div>
                                    </div>
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
                                    <h6 class="mb-0 font-size-15">Bilan Service </h6>
                                    <h4 class="mt-3 mb-0 font-size-22">144554 FCFA</h4>
                                    </div>

                                <div class="">
                                    <div class="avatar">
                                        <div class="avatar-title rounded bg-soft-primary">
                                            <i class="bx bx-revision font-size-24 mb-0 text-primary"></i>
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
                        <div class="card-header">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Statistique de vente </h5>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="font-size-22">3444433 FCFA </h4>
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-inline main-chart text-md-end mb-0">
                                        <li class="list-inline-item chart-border-left me-0 border-0">
                                            <h4 class="text-primary font-size-22">100024333 FCFA  <span class="text-muted d-inline-block font-size-14 align-middle ms-2">Mois en cours </span></h4>
                                        </li>
                                        <li class="list-inline-item chart-border-left me-0">
                                            <h4 class="font-size-22">44445433<span class="text-muted d-inline-block font-size-14 align-middle ms-2">Dépdenses </span>
                                            </h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div id="sales-report" data-colors='["#1f58c7","#e6ecf9"]' class="apex-charts" dir="ltr"></div>
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
                                               Product
                                            </th>
                                            <th  style="width: 210px;">Product Name</th>
                                            <th>Customer Name</th>
                                            <th>Order ID</th>
                                            <th>Color</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th style="width: 270px;">Trend</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="avatar">
                                                    <div class="product-img avatar-title img-thumbnail bg-soft-primary border-0">
                                                        <img src="assets/images/product/img-1.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">Office Chair Crime</td>
                                            <td>
                                                Neal Matthews
                                            </td>
                                            <td>
                                            #526552
                                            </td>
                                            <td>
                                                Gray
                                            </td>
                                            <td>12/01/2022</td>
                                            <td><span class="badge badge-soft-primary font-size-12">Pending</span></td>
                                            <td>
                                                <div id="chart-sparkline1" data-colors='["#1f58c7"]'></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="avatar">
                                                    <div class="product-img avatar-title img-thumbnail bg-soft-success border-0">
                                                        <img src="assets/images/product/img-2.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">Sofa Home Chair Black</td>
                                            <td>
                                                Connie Franco
                                            </td>
                                            <td>
                                            #746648
                                            </td>
                                            <td>
                                                Black
                                            </td>
                                            <td>14/01/2022</td>
                                            <td><span class="badge badge-soft-success font-size-12">Active</span></td>
                                            <td>
                                                <div id="chart-sparkline2" data-colors='["#1f58c7"]'></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="avatar">
                                                    <div class="product-img avatar-title img-thumbnail bg-soft-danger border-0">
                                                        <img src="assets/images/product/img-3.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">Tuition Classes Chair</td>
                                            <td>
                                                Paul Reynolds
                                            </td>
                                            <td>
                                            #125635
                                            </td>
                                            <td>
                                                Crime
                                            </td>
                                            <td>17/01/2022</td>
                                            <td><span class="badge badge-soft-success font-size-12">Active</span></td>
                                            <td>
                                                <div id="chart-sparkline3" data-colors='["#1f58c7"]'></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="avatar">
                                                    <div class="product-img avatar-title img-thumbnail bg-soft-primary border-0">
                                                        <img src="assets/images/product/img-4.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">Dining Table Chair</td>
                                            <td>
                                                Ronald Patterson
                                            </td>
                                            <td>
                                            #236521
                                            </td>
                                            <td>
                                                Crime
                                            </td>
                                            <td>18/01/2022</td>
                                            <td><span class="badge badge-soft-primary font-size-12">Pending</span></td>
                                            <td>
                                                <div id="chart-sparkline4" data-colors='["#1f58c7"]'></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="avatar">
                                                    <div class="product-img avatar-title img-thumbnail bg-soft-success border-0">
                                                        <img src="assets/images/product/img-5.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">Home & Office Chair</td>
                                            <td>
                                                Adella Perez
                                            </td>
                                            <td>
                                            #236521
                                            </td>
                                            <td>
                                                Crime
                                            </td>
                                            <td>18/01/2022</td>
                                            <td><span class="badge badge-soft-primary font-size-12">Pending</span></td>
                                            <td>
                                                <div id="chart-sparkline5" data-colors='["#1f58c7"]'></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

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
