<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\SousService;
use App\Models\Transaction as ModelsTransaction;
use Livewire\Component;

class Transaction extends Component
{
    public $service ;
    public $sousService  = []  ;
    public $montant_entrant;
    public $codeTransaction = 0;
    public $sub_service_id ;


    protected $rules = [
     'montant_entrant' => 'required',
     'sub_service_id' => 'required',
      'service' => 'required'
    ];
    public function selectFiliereObtainLevel(Service $service) {
        $this->service =  $service;

        $this->sousService = SousService::where('service_id', '=', $this->service->id)->get();

    }

    public function __construct()
    {
        $this->codeTransaction = rand(1000, 3000);
    }


    public function createTransaction()  {

      $data=    ModelsTransaction::create([
            'montant_entrant'=> $this->montant_entrant,
            'sub_service_id' => $this->sub_service_id,
            'service_id' => $this->service->id,
            'code_transaction' => $this->codeTransaction,
        ]);

        return redirect()->back();

    }


    public function render()
    {
        return view('livewire.transaction', [
            'allServices' => Service::all(),
            'allSubService' => $this->sousService,
            'allTransactions'=> ModelsTransaction::orderByDesc('created_at')->get()
        ]);
    }





}
