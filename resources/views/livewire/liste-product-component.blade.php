<div>
    
<div class="main main-app p-3 p-lg-4">
   <div class="d-md-flex align-items-center justify-content-between mb-4">
        <div>
          <h4 class="main-title mb-0">Liste des produits</h4>
        </div>
        <div class="d-flex align-items-center gap-4 mt-3 mt-md-2">
           <input type="text" wire:model="search" class="form-control" placeholder="rechercher un produit .">
        <a href="{{route('product.form')}}" class="input-group-text">Nouveau produit  </a>
        </div>
      </div>

<div class="card card-one mt-3">
        <div class="card-body p-3">
          <div class="table-responsive">
            <table class="table table-four table-bordered">
              <thead>
                <tr>
                  <th>Désignation </th>
                  <th>Prix </th>
                  <th>Catégorie </th>
                  <th>Date de création </th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach($ressource as $value)
                <tr>
        <td>{{$value->designation}}</td>
      <td>{{$value->prix}}</td>
      <td>{{$value->category->nom}}</td>
       <td>{{$value->created_at->diffForHumans()}}</td>

                  <td>
                       <a href="{{route('product.edit', $value->id)}}" class="text-dark">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a href="{{route('product.destroy', $value->id)}}" class="text-dark" onclick="return confirm('voulez-vous vraiment supprimer ?')">
                     <i class="fa-solid fa-trash-can"></i>
                    </a>

                      <a href="{{route('product.detail', $value->id)}}" class="text-dark">
                       <i class="fa-regular fa-eye"></i>
                    </a>

                  </td>
                </tr>
                @endforeach
              
                
              </tbody>
            </table>
            {{$ressource->links()}}
          </div>
        </div><!-- card-body -->
      </div> 



</div>


</div>
