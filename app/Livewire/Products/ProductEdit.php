<?php

namespace App\Livewire\Products;

use App\Livewire\Forms\Products\ProductForm;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductEdit extends Component
{
    
    use WithFileUploads;
    public ProductForm $form;

    public function mount(Product $product)
    {
        $this->form->setProduct($product);
    }

    public function updateProduct(){
        $this->form->update();
        session()->flash('success', 'Product updated successfully.');
        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.product-edit');
    }
}
