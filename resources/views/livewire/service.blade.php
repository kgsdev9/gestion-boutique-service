<div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <div class="row mb-2">
                                        <div class="col-xl-3 col-md-12">
                                            <div class="pb-3 pb-xl-0">
                                                <form class="email-search">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control bg-light" placeholder="Search...">
                                                        <span class="bx bx-search font-size-18"></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-md-12">
                                            <div class="text-sm-end">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="mdi mdi-plus me-1"></i>
                                                   Nouveau Service
                                                  </button>

                                             </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0">
                                        <tbody>

                                           @foreach ($allServices as $service)
                                           <tr>

                                            <td>

                                                <h5 class="text-truncate font-size-14 m-0">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="javascript: void(0);" class="text-dark">{{$service->nom}}</a></h5>
                                            </td>
                                            <td>
                                                <p class="mb-0">
                                                    <i class="mdi mdi-comment-outline align-middle font-size-16 me-1"></i> {{$service->allTransactionWithSingleService($service->id)}}  Total Transaction
                                                    <a href=""><i class="mdi mdi-eye-outline font-size-18 text-muted"></i></a>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="mb-0">
                                                         @foreach ($service->getSousService($service->id) as $data)
                                                                    {{$data->nom}}
                                                         @endforeach
                                                </p>
                                            </td>

                                            <td>
                                                <div class="text-center">

                                                  <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary" wire:click="addSousService({{$service}})">
                                                    <i class="mdi mdi-plus me-1"></i>
                                                    </button>
                                                </div>
                                            </td>

                                        </tr>
                                           @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>

    <div class="modal fade" wire:ignore.serf id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un ou plusieurs sous service </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div class="form-group">
                    <label for="">Selectionner des sous services  </label>
                    <select wire:model="sous_service" id="" class="form-control">
                        <option value="">Selectioner un sous service </option>
                        <option value="rechargement">Rechargement</option>
                        <option value="depot">Dépot</option>
                        <option value="retrait">Retrait</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
              <button type="button" class="btn btn-primary" wire:click="createSubService">Enregistrer</button>
            </div>
          </div>
        </div>
      </div>
</div>
