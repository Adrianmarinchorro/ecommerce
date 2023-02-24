<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products2 extends Component
{
    use WithPagination;

    public $search, $paginate = 10;

    public function updatePaginate($value)
    {
        $this->paginate = $value;
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $products = Product::query()->applyFilters(['search' => $this->search])->paginate($this->paginate);

        return view('livewire.admin.products2', compact('products'))->layout('layouts.admin');
    }
}
