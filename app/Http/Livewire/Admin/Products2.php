<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products2 extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $products = Product::where('name', 'LIKE', "%{$this->search}%")->paginate(10);

        return view('livewire.admin.products2', compact('products'))->layout('layouts.admin');
    }
}
