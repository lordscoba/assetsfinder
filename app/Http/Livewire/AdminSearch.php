<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Properties;
use Livewire\WithPagination;

class AdminSearch extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search_status = '';
    public $search_type = '';
    public $search_country = '';
    public $search_room = '';
    public $search_bed = '';
    public $search_bath = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin-search',[
            'properties' => Properties::where('property_type','like','%'.$this->search_type.'%')
            ->where('property_status','like','%'.$this->search_status.'%')
            ->where('rooms','like','%'.$this->search_room.'%')
            ->where('country','like','%'.$this->search_country.'%')
            ->where('beds','like','%'.$this->search_bed.'%')
            ->where('bathrooms','like','%'.$this->search_bath.'%')
            ->paginate(10, ['*'], 'index'),
            // 'properties' => Properties::paginate(10),
        ]);
    }
}

