<?php

namespace App\Livewire\Zakat;

use App\Models\Zakat as ModelsZakat;
use Livewire\Component;
use Livewire\WithPagination;

class Zakat extends Component
{   
    
    use WithPagination;

    public $search = '';
    public $date = '';
    public $paginate=10;
    public $zakat_id;

    public $nama;
    public $jiwa;

    protected $listeners = ['zakatDestroy' => 'zakatDestroyer'];

    public function render()
    {
        if($this->search){
            $zakat = ModelsZakat::with('user')->where('nama', 'like', '%'.$this->search.'%')->latest()->paginate($this->paginate);
        }elseif($this->date){
            $zakat = ModelsZakat::with('user')->whereDate('created_at',$this->date)
                        ->latest()->paginate($this->paginate);
           
        }else{
            $zakat = ModelsZakat::with('user')->latest()->paginate($this->paginate);
        }
        return view('livewire.zakat.zakat',[
            'zakat' => $zakat
        ]);
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function zakatDelete($get_id){

        $zakat = ModelsZakat::destroy($get_id);

    }
    
}
