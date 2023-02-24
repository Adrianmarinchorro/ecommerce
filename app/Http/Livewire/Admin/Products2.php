<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products2 extends Component
{
    use WithPagination;

    public $paginacionDisponible = [5, 10, 15, 25, 50, 100];

    public $search, $paginate = 10;

    public function updatingPaginate()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        if(!in_array($this->paginate, $this->paginacionDisponible)) {
            $this->paginate = 10;
        }

        $products = Product::query()->applyFilters(['search' => $this->search])->paginate($this->paginate);

        return view('livewire.admin.products2', compact('products'))->layout('layouts.admin');
    }
}
