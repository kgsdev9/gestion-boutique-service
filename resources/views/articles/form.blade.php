<div class="row">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title mb-0">Nouveau Article </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-4 mt-xl-0">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="formrow-firstname-input">Libéllé  du produit     @error('nom') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                        <input type="text" class="form-control" placeholder="Nom du produit " wire:model="nom">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="formrow-firstname-input">Libéllé  du produit     @error('marque_id') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                        <select wire:model="marque_id" id="" class="form-control">
                                            <option value="">Selectionner une catégorie </option>
                                            @foreach ($allCategorie as $marque)
                                                <option value="{{$marque->id}}">{{$marque->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-email-input"> Prix   @error('prix') <span class="text-danger">{{ $message }}</span> @enderror </label>
                                            <input type="number" wire:model="prix" class="form-control" placeholder="342" >
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

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" >Description   @error('description') <span class="text-danger">{{ $message }}</span> @enderror</label>
                                        <textarea  class="form-control"  wire:model="description" cols="30" rows="10"></textarea>
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <div class="hstack gap-3">
                                        @if($articleId)
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
