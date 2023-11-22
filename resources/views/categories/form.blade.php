<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title mb-0">Nouvelle Catégorie</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-4 mt-xl-0">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Nom de la catégorie    @error('nom') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                    <input type="text" class="form-control" placeholder="Nom de la catégoie" wire:model="nom">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-email-input">Total produit  @error('total_produit') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                            <input type="number" wire:model="total_produit" class="form-control" placeholder="342" >
                                        </div>
                                    </div>

                                    @if(!$image)
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" >Image   @error('image') <span class="text-danger">{{ $message }}</span> @enderror</label>

                                            <input type="file" class="form-control" wire:model="image">
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" > Uploader une nouvelle image  @error('new_image') <span class="text-danger">{{ $message }}</span> @enderror</label>
                                            <input type="file" class="form-control" wire:model="new_image">
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="mt-4">
                                    <div class="hstack gap-3">
                                        @if($marqueId)
                                        <button type="button" wire:click="update" class="btn btn-secondary">Modifier</button>
                                        @else
                                        <button type="button" wire:click="create" class="btn btn-secondary">Enregistrer</button>
                                        @endif
                                        <div class="vr"></div>
                                        <button type="button" wire:click="cancelCreate" class="btn btn-outline-danger">Retourner</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
