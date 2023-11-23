<div>
	<div class="main-content">
		<div class="page-content">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="mb-3">
							<h5 class="card-title">
								liste des articles
							</h5>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
							<div>
                                <button  type="button"  wire:click="displayform" class="btn btn-primary"><i class="fas fa-plus"></i> Nouvelle article  </button>

							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
                @if($mode == false)
				@include('articles.liste')
                @elseif($mode == true)
                @include('articles.form')
                @endif
			</div>
			<!-- container-fluid -->
		</div>
		<!-- End Page-content -->


	</div>
</div>
