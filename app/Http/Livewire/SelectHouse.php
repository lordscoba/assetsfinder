<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Properties;
use Livewire\WithPagination;


class SelectHouse extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search_status = '';
    public $search_type = '';
    public $search_room = '';
    public $search_bed = '';
    public $search_bath = '';
    public $search_agencies = '';
    public $search_price = '';
    public $search_area = '';

    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {

        return view('livewire.select-house', [
            'properties' => Properties::where('property_type','like','%'.$this->search_type.'%')
            ->where('property_status','like','%'.$this->search_status.'%')
            ->where('rooms','like','%'.$this->search_room.'%')
            ->where('beds','like','%'.$this->search_bed.'%')
            ->where('bathrooms','like','%'.$this->search_bath.'%')
            ->where('agency','like','%'.$this->search_agencies.'%')
            ->where('property_price','like','%'.$this->search_price.'%')
            ->where('area','like','%'.$this->search_area.'%')
            ->paginate(10, ['*'], 'index'),
            // 'properties' => Properties::paginate(10),
        ]);
    }
}
