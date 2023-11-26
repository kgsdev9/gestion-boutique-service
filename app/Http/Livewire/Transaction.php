<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\SousService;
use App\Models\Transaction as ModelsTransaction;
use Livewire\Component;
use Livewire\WithPagination;

class Transaction extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $service ;
    public $sousService  = []  ;
    public $montant_entrant;
    public $codeTransaction = 0;
    public $sub_service_id ;
    public $transactionId ;


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


    public function delete(ModelsTransaction $transaction) {
        $transaction->delete();
        $this->reset();
    }



    public function duplacateTransaction(ModelsTransaction $transaction) {


        ModelsTransaction::create([
            'montant_entrant'=> $transaction->montant_entrant,
            'sub_service_id' => $transaction->sub_service_id,
            'service_id' => $transaction->service_id,
            'code_transaction' => $this->codeTransaction,
        ]);
        $this->reset();
    }


    public function render()
    {


        return view('livewire.transaction', [
            'allServices' => Service::all(),
            'allSubService' => $this->sousService,
            'allTransactions'=>  ModelsTransaction::
                                   whereYear('created_at', '=' ,date('Y'))
                                  ->orderByDesc('created_at')
                                  ->paginate(12)
        ]);
    }





}
