<div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title">Liste des transactions</h5>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                                <div>

                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"><i class="bx bx-plus me-1"></i>Nouvelle transaction </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row mt-2">

                        @foreach ($allTransactions as $transaction)


                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="bx bx-dots-horizontal text-muted font-size-20"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <button class="dropdown-item" wire:click="delete({{$transaction}})">Supprimer</button>
                                            <button  wire:click="duplacateTransaction({{$transaction}})" class="dropdown-item" href="#">Dupliquer</button>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">

                                        <div class="flex-1 ms-3">
                                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Service : {{$transaction->service->nom}}</a></h5>
                                            <span class="badge badge-soft-success mb-0">Sous service : {{$transaction->subService?->nom}} </span>
                                        </div>
                                    </div>

                                    <p class="text-muted mt-3 mb-0">Transaction de {{$transaction->montant_entrant}} FCFA </p>

                                    <div class="mt-3 pt-1">
                                        <p class="mb-0">
                                           Date Paiment  : {{date('d-m-Y', strtotime($transaction->created_at)) }}</p>
                                        <p class="mb-0 mt-2">
                                           Code Transaction  {{$transaction->code_transaction}}</p>
                                           <p class="mb-0 mt-2">
                                           Heure de la transaction {{date('H:i:s', strtotime($transaction->created_at)) }} </p>
                                    </div>

                                    <div class="d-flex gap-2 pt-4">

                                        <a href="{{route('single.transaction.invoice', $transaction->id)}}" class="btn btn-warning btn-sm w-50"> <i class="bx bx-download"></i>  Imprimer</a>
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
                                <p class="mb-sm-0">Liste des transactions par service  </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-end">
                                <ul class="pagination mb-sm-0">
                                 {{$allTransactions->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div  wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle Transaction</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="md-3">
                                    <label for="">Entrer le montant</label>
                                    <input type="number" class="form-control" wire:model="montant_entrant">
                                </div>
                              <div class="md-3">
                                <label for="">Selectioner un service</label>
                                <select wire:change="selectFiliereObtainLevel($event.target.value)"  class="form-control">
                                    <option value="">---Choisir le service concérné--------</option>
                                    @foreach ($allServices as $service)
                                    <option value="{{$service->id}}">{{$service->nom}} </option>
                                    @endforeach

                                </select>

                              </div>
                              <div class="md-3" >
                                <label for="">Selectioner un sous service </label>
                                     <select wire:model="sub_service_id"  class="form-control">
                                        <option value="">----Choisir le sous service </option>
                                    @foreach ($allSubService as $subservice)
                                    <option value="{{$subservice->id}}" selected>{{$subservice->nom}}</option>
                                    @endforeach

                                </select>

                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                              <button type="button" class="btn btn-primary" wire:click="createTransaction()">Valider</button>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

</div>
