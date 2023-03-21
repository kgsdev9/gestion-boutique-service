


<div




<div  class="main main-app p-3 p-lg-4">

    <div class="row">
        <div class="col-sm-12">
        <div class="card card-table">
        <div class="card-body">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col">
        <h3 class="page-title">Liste des utilisateurs </h3>
        </div>
        <div class="col-auto text-end float-end ms-auto download-grp">
            <input wire:model="search" type="search" placeholder="Rechercher un utlisateur......" class="form-control">

        </div>
        </div>
        </div>

        <div class="table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6">


        </div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
        <thead class="student-thread">
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Exam Name: activate to sort column descending" style="width: 122.625px;">Utilisateur </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 62.1875px;">Email </th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Subject: activate to sort column ascending" style="width: 96.4844px;">Date de création </th>
            <th class="text-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 101.203px;">Action</th>
        </tr>
        </thead>
        <tbody>







            @foreach($users as $value)
        <tr role="row" class="odd">
        <td class="sorting_1">
        <h2>
        <a>{{ $value->name}}</a>
        </h2>
        </td>
        <td>{{ $value->email}}</td>
        <td>{{ $value->created_at}}</td>

        <td class="text-end">
        <div class="actions">
        <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
            <i class="fa fa-trash" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-trash" aria-label="fa fa-trash"></i>
        </a>
        <a href="edit-exam.html" class="btn btn-sm bg-danger-light">
        <i class="feather-edit"></i>
        </a>

       
        </div>
        </td>
        </tr>

        
        @endforeach




    </tbody>
        </table></div></div><div class="row">


            <div class="col-sm-12 col-md-4">

                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">

                    <ul class="pagination">

                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    {{$users->links()}}
                                </ul>

                            </div></div>

                    </ul></div>

            </div>

        </div></div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>




