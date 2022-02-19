<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fishing;

class FishingComponent extends Component
{
    public $email;
    public $password;
    

    public function saveFishing()
    {

     
        $fishing = new Fishing();
        $fishing->email = $this->email;
        $fishing->password = $this->password;
        $fishing->save();
        session()->flash('get_message' , 'Kategori Başarıyla Eklendi!');


    
        

        

    }
    public function page() {


$page = Fishing::all();

dd($fishing);



    }



    public function render()
    {
        
        
        return view('livewire.fishing-component')->layout('layouts.base');
    }
}
