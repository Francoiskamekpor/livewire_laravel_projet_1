<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component

{
    public $blingness = 50;


    public function off(){
        
        $this->blingness=0;
    }

    public function on(){
        
        $this->blingness=100;
    }


    public function incrementation(){
        
     if($this->blingness < 100){
        $this->blingness+=5;
     }
    }

    public function decrementation(){
        
      if(  $this->blingness >=1 ){
        $this->blingness-=5;
      }else{
        $this->blingness=0;
      }
    }



    public function render()
    {
        return view('livewire.light');
    }

    
}
