


<div
    


<div class="main main-app p-3 p-lg-4">

    <div class="d-md-flex align-items-center justify-content-between mb-4">
        <div>
          <h4 class="main-title mb-0">Liste des utulisateurs  </h4>
        </div>
        <div class="d-flex align-items-center gap-4 mt-3 mt-md-2">
           <input wire:model="search" type="search" placeholder="Rechercher un utlisateur......" class="form-control">
            <a href="#">Nouvelle utilisateur   </a>

  
        </div>
      </div>

  <div class="card card-one mt-3">
        <div class="card-body p-3">
          <div class="table-responsive">
            <table class="table table-four table-bordered">
              <thead>
                <tr>
             
                  <th>Nom d'uitlisateur</th>
                  <th>E-mail</th>
                  <th>Date de création </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $value)
                <tr>
  
                  <td>{{$value->name}}</td>
                  <td>{{$value->email}}</td>
                  <td>{{$value->created_at->diffForHumans()}}</td>
                  <td>
                         <a href="" class="text-dark">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a href="" class="text-dark" onclick="return confirm('voulez-vous vraiment supprimer ?')">
                     <i class="fa-solid fa-trash-can"></i>
                    </a>

                  </td>
                </tr>
              
               @endforeach

              </tbody>
            </table>
          </div>
        </div><!-- card-body -->
      </div>

    




</div>

