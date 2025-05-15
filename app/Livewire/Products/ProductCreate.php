<?php

namespace App\Livewire\Products;

use App\Livewire\Forms\Products\ProductForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreate extends Component
{
    use WithFileUploads;
    public ProductForm $form;

    public function storeProduct()
    {
        $this->form->store();
        session()->flash('success', 'Product created successfully.');
        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.product-create');
    }
}
