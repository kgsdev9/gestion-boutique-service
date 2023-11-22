<div>
	<div class="main-content">
		<div class="page-content">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="mb-3">
							<h5 class="card-title">
								liste des catégories
							</h5>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
							<div>
                                <button  type="button"  wire:click="displayform" class="btn btn-primary"><i class="fas fa-plus"></i> Nouvelle Commande </button>

							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
                @if($mode == false)
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div>
                                            Afficher
                                            <select wire:model.lazy="dynamique_paginate" id="" class="form-select w-auto">
                                                @for ($i = 10; $i <= 50; $i+= 10)
                                                <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>

                                        </div>


                                    </div>


                                    <div class="col-lg-2">
                                        <input type="text" wire:model="search" class="form-control bg-light" placeholder="Chercher..">
                                     </div>

                                </div>




								<div class="table-responsive">
									<table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
										<thead>
											<tr>
												<th style="width: 90px;">
													Image
												</th>
												<th style="width: 210px;">
													Libéllé
												</th>
												<th>
													Total Article
												</th>
												<th>
													Article  ajoutés
												</th>

												<th>
													Status
												</th>

												<th>
													Action
												</th>
											</tr>
										</thead>
										<tbody>
											@forelse ($all as $value  )
											<tr>
												<td>
													<div class="avatar">
														<div class="product-img avatar-title img-thumbnail bg-soft-primary border-0">
															<img src="{{Storage::url($value->image)}}" class="img-fluid" alt="">
														</div>
													</div>
												</td>
												<td class="fw-semibold">
													{{$value->nom}}
												</td>
												<td>
                                                    {{$value->total_produit}}
												</td>
												<td>
													0 Produits De marque
												</td>


												<td>
													<span class="badge badge-soft-primary font-size-12">Stock disponible</span>
												</td>

												<td>

                                                    <button wire:click="edit({{$value->id}})" class="btn btn-sm bg-success-light me-2 "><i class="fa fa-edit"></i></button>
                                                    <button wire:click="destroy({{$value->id}})" class="btn btn-sm bg-success-light me-2 "><i class="fa fa-trash"></i></button>

												</td>
											</tr>
											@empty
											<span>Aucune catégorie</span>
											@endforelse
										</tbody>
									</table>


								</div>


							</div>
                            <div class="row g-0 align-items-center pb-3">

                                <div class="col-sm-6">
                                    <div class="float-sm-end">
                                        <ul class="pagination mb-sm-0">
                                            <li class="page-item">
                                                {{$all->links()}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>

                @elseif($mode == true)
                @include('categories.form')
                @endif
			</div>
			<!-- container-fluid -->
		</div>
		<!-- End Page-content -->


	</div>
</div>
