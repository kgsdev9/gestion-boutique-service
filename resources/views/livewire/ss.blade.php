<div>
	<div class="main main-app p-3 p-lg-4">
		<div class="d-md-flex align-items-center justify-content-between mb-4">
			<div>
				<h4 class="main-title mb-0">Liste des catégories   </h4>
			</div>
			<div class="d-flex align-items-center gap-6 mt-3 mt-md-6">
				<input type="text" wire:model="search" class="form-control" placeholder="N°Commande">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card card-table comman-shadow">
					<div class="card-body">
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col">
									<h3 class="page-title">Liste des catégories  </h3>
								</div>
								<div class="col-auto text-end float-end ms-auto download-grp">
									<a href="{{route('rapport.commande')}}" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Rapport </a>
									<button  type="button"  wire:click="displayform" class="btn btn-primary"><i class="fas fa-plus"></i> Nouvelle Commande </button>
								</div>
							</div>
						</div>
                        @if($mode == false)
						<div class="table-responsive">
							<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
								<div class="row"></div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
											<thead class="student-thread">
												<tr role="row">

													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 46.2188px;">
													    Libéllé
													</th>

													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 40.0312px;">
														Image
													</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending" style="width: 71.25px;">
														Total Produit
													</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Parent Name: activate to sort column ascending" style="width: 91.7188px;">
														Total Restant
													</th>







													<th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 72px;">
														Action
													</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($all as $value )
												<tr role="row" class="odd">

													<td>
														{{$value->
														nom}}
													</td>

													<td>
														<img src="{{Storage::url($value->image)}}" alt="" style="height:60px;">
													</td>
													<td>
														{{$value->
														total_produit}}
													</td>
													<td>
														@if($value->total_restant_produit == 0)
                                                        0
                                                        @elseif($value->total_restant_produit != 0)
                                                        <span>{{$value->total_restant_produit}}</span>
                                                        @endif
													</td>
													<td class="text-end">
														<div class="actions ">
															<button wire:click="edit({{$value->id}})" class="btn btn-sm bg-success-light me-2 "><i class="fa fa-edit"></i></button>
                                                            <button wire:click="edit{{$value->id}}" class="btn btn-sm bg-success-light me-2 "><i class="fa fa-trash"></i></button>

														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-7">
										<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"></div>
									</div>
								</div>
							</div>
						</div>
                        @elseif($mode == true)
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card comman-shadow">
                                    <div class="card-body">
                                        <form>
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="form-title student-info">
                                                      Nouvelle Categorie
                                                        <span>
                                                            <a href="javascript:;"><i class="feather-more-vertical"></i></a>
                                                        </span>
                                                    </h5>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group local-forms">
                                                        <label>Nom de la catégorie  <span class="login-danger">*</span></label>
                                                        <input class="form-control" type="text" wire:model="nom" placeholder="nom de la catégorie">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group local-forms">
                                                        <label>Total Produit  <span class="login-danger">*</span></label>
                                                        <input class="form-control" type="text" wire:model="total_produit" placeholder="34" name="entreprise" value="">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-4">
                                                    <div class="form-group students-up-files">
                                                        <label>Image de la  catégorie </label>
                                                        <div class="uplod">
                                                            <label class="file-upload image-upbtn mb-0">Choose File
                                                                 <input type="file" wire:model="image">

                                                                </label>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-12">
                                                    <div class="student-submit">
                                                        @if($marqueId)
                                                        <button type="button" wire:click="update" class="btn btn-dark">Editer la maruqe </button>
                                                        @else
                                                        <button type="button" wire:click="create" class="btn btn-dark">Enregistrer la commande </button>
                                                        @endif
                                                        <button type="button" wire:click="cancelCreate" class="btn btn-danger">Retourner</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
