<div>

    <div class="main main-app p-3 p-lg-4">
    <div class="d-md-flex align-items-center justify-content-between mb-4">
        <div>
          <h4 class="main-title mb-0">Liste des commandes  </h4>
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
        <h3 class="page-title">Liste des commandes </h3>
        </div>
        <div class="col-auto text-end float-end ms-auto download-grp">

        <a href="{{route('rapport.commande')}}" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Rapport </a>
        <a href="{{route('form.commande')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nouvelle Commande </a>
        </div>
        </div>
        </div>

        <div class="table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row">
        </div>
        <div class="row">
        <div class="col-sm-12">
        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
        <thead class="student-thread">
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" : activate to sort column descending" style="width: 22.5px;">
        <div class="form-check check-tables">
        <input class="form-check-input" type="checkbox" value="something"> </div>
        </th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 46.2188px;">No  commande </th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 155.062px;">Entreprise </th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 40.0312px;">Prix. Unit </th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending" style="width: 71.25px;">Quantite</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Parent Name: activate to sort column ascending" style="width: 91.7188px;">Total </th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mobile Number: activate to sort column ascending" style="width: 108.344px;">Date de  facturation </th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 289.391px;">Email </th>
        <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 72px;">Action</th></tr>
        </thead>
        <tbody>










            @foreach ($ressourceCommande as $value )
        <tr role="row" class="odd">
        <td class="sorting_1">
        <div class="form-check check-tables">
        <input class="form-check-input" type="checkbox" value="something">
        </div>
        </td>
        <td>{{$value->numero}}</td>
        <td>
        <h2 class="table-avatar">
{{$value->entreprise }}
        </h2>
        </td>
        <td>{{$value->prix}}FCFA </td>
        <td>{{$value->quantite}}</td>
        <td>{{$value->total}} FCFA </td>
        <td>{{date("Y/m/d", strtotime($value->created_at))}}</td>
        <td>{{$value->email}}</td>


        <td class="text-end">
        <div class="actions ">

        <a href="{{route('detail.commande', $value->id)}}" class="btn btn-sm bg-success-light me-2 ">
        <i class="feather-eye"></i>
        </a>
        <a href="{{route('commande.edit', $value->id)}}" class="btn btn-sm bg-danger-light">
        <i class="feather-edit"></i>
        </a>

        <a href="{{route('delete.commande', $value->id)}}" class="btn btn-sm bg-success-light me-2 " onclick="return confirm('voulez-vous vraiment supprimer ?')">
            <i class="fa fa-trash" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-trash" aria-label="fa fa-trash"></i>
            </a>

            <a href="{{route('commande.test', $value->id)}}" class="btn btn-sm bg-success-light me-2 " target="blank">
              voir
                </a>


        </div>
        </td>
        </tr>
        @endforeach




    </tbody>
        </table></div></div><div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                <ul class="pagination">
                    {{$ressourceCommande->links()}}
                </ul>

            </div></div>

        </div></div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>



</div>
