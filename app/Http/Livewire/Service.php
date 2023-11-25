<?php

namespace App\Http\Livewire;

use App\Models\Service as ModelService;
use App\Models\SousService;
use Livewire\Component;

class Service extends Component
{

    public $service ;
    public $sous_service;

    public function render()
    {
        return view('livewire.service',[
            'allServices' => ModelService::all(),
        ]);
    }

    public function addSousService(ModelService $service) {
      $this->service  = $service;
    }




    public function createSubService() {

       $ressourceExists =  SousService::where('service_id','=',$this->service->id)
                    ->where('nom', '=', $this->sous_service)
                    ->exists();

        if($ressourceExists) {
            dd('existes deja');
        } else {
       $sousservice =  SousService::create([
        'nom'=> $this->sous_service,
        'service_id'=> $this->service->id
    ]);
        $this->reset();
        }


    }
}
