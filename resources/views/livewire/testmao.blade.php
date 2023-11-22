<div>
	<div class="main-content">
		<div class="page-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="card" id="invoiceList">
							<div class="card-header border-0">
								<div class="d-flex align-items-center">
									<h5 class="card-title mb-0 flex-grow-1">
										Liste des versements
									</h5>
									<div class="flex-shrink-0">
										<div class="d-flex gap-2 flex-wrap">

											<a href="#" class="btn btn-danger"><i class="ri-add-line align-bottom me-1"></i>Télecharger la list des versements</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body bg-light-subtle border border-dashed border-start-0 border-end-0">
									<div class="row">
										<div class="col-md-3">
											<div>
												<select  wire:change="selectFiliereObtainLevel($event.target.value)"  class="form-control">
													<option >Selectionner une filiere</option>
													@foreach ($allFilieres as $filiere)
													<option value="{{$filiere->id}}">
														{{$filiere->
														nom}}
													</option>
													@endforeach
												</select>
												<i class="ri-search-line search-icon"></i>
											</div>
										</div>
										<div class="col-md-3">
											<div>
												<select  class="form-control" wire:change="selectNiveauByObtainScolarite($event.target.value)">
													<option> Selectionner une niveau </option>
													@foreach ($allLevels as $level)
													<option value="{{$level->id}}">
														{{$level->
														niveau}}
													</option>
													@endforeach
												</select>
												<i class="ri-search-line search-icon"></i>
											</div>
										</div>
										<div class="col-md-3">
											<div>
												<select  class="form-control" wire:change="selectClasseByObtainEtudiant($event.target.value)">
													<option> Selectionner une classe  </option>
													@foreach ($allClasses as $classe)
													<option value="{{$classe->id}}">
														{{$classe->
														nom}}
													</option>
													@endforeach
												</select>
												<i class="ri-search-line search-icon"></i>
											</div>
										</div>
										<div class="col-md-3">
											<div>
												<select  class="form-control" wire:change="selectAnneAcademicByObtainScolarite($event.target.value)">
													<option> Selectionner une annéee academique </option>
													@foreach ($anneeAcademic as $annee)
													<option value="{{$annee->id}}">
														{{$annee->
														valeur}}
													</option>
													@endforeach
												</select>
												<i class="ri-search-line search-icon"></i>
											</div>
										</div>
									</div>
							</div>
							<div class="card-body">
                                <div class="row job-list-row" id="candidate-list">
                                    @forelse ($alletudiants as $etudiant)
                                    <div class="col-xxl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-lg rounded">
                                                            <img src="{{Storage::url($etudiant->photo)}}" alt="" class="member-img img-fluid d-block rounded">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <a href="pages-profile.html"><h5 class="fs-16 mb-1">{{$etudiant->nom}} {{$etudiant->prenom}}</h5></a>
                                                        <p class="text-muted mb-2">
                                                           Matricule {{$etudiant->matricule}}
                                                        </p>

                                                        <div class="d-flex gap-4 mt-2 text-muted">
                                                            <div>
																<button  wire:click="selectedEtudiant({{$etudiant->id}})"  class="btn btn-primary">
																	Versement
																  </button>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
							</div>
						</div>
					</div>
					<!--end col-->
				</div>
				<!--end row-->
			</div>
			<!-- container-fluid -->
		</div>
		<!-- End Page-content -->
	</div>

    <div wire:ignore.self class="modal fade" id="creationVersement"  data-bs-backdrop="static"   aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="modal-title">Liste des versements {{$currentEtudiant?->matricule}}   Scolarite  {{$scolarite?->montant}}  </h5>
                        </div>
                        <div class="col-md-4">
                        <a class="btn btn-warning" href="{{route('collecte.payment.etudiant', $currentEtudiant?->id)}}">Télechaerger</a>
                        </div>

                        <div class="col-md-2">
                            <img src="{{Storage::url($currentEtudiant?->photo)}}" alt="" height="100px;" class="img-fluid  rounded-circle">
                        </div>

                    </div>

                </div>
                <div class="modal-body">
                     @if(!$is_regler)
                    <div class="d-flex">
                        <div class="d-flex flex-grow-1 mr-2">
                            <div class="row">
                             <div class="col-md-4">
                                <div class="flex-grow-1 mr-2">
                                    <input type="text" class="form-control" wire:model="montant_verse" placeholder="Entrer le montant">
                                    <div>@error('montant_verse') {{ $message }} @enderror</div>

                                </div>
                             </div>

                             <div class="col-md-4">
                                <div class="flex-grow-1 mr-2">
                                    <input type="date" class="form-control" wire:model="date_payment" >
                                    <div>@error('date_payment') {{ $message }} @enderror</div>

                                </div>
                             </div>


                             <div class="col-md-4">
                                <div class="flex-grow-1 mr-2">
                                    <input type="text"  class="form-control" placeholder="Somme restante" value="{{$sommeRestanteEtudiant}}" disabled readonly>
                                </div>
                             </div>

                        </div>
                        </div>
                        <button class="btn btn-success" type="button" wire:click="createVersement()">VALIDER</button>
                    </div>
                    @else
                    <span>Scolarite réglée </span>
                     @endif
                    <table class="table table-bordered mt-2">
                        <thead class="thead-dark">
                        <th>Montant Verse</th>
                        <th>Montant Restant </th>
                        <th>Date de paiement</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($versement as $verse)
                        <tr>
                            <td>{{$verse->montant_verse}} FCFA </td>
                            <td> {{$verse->montant_restant}}  FCFA </td>
                            <td>{{$verse->date_payment}}</td>
                            <td>
                                <button type="button" wire:click="destroy({{$verse}})" class="btn btn-danger">supprimer</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>

                </div>
              </div>
        </div>
    </div>

    @push('javascript')
    <script>
        window.addEventListener("showModal", event => {
         $("#creationVersement").modal("show")
        })
     </script>

    @endpush



</div>




