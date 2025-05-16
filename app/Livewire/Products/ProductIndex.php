<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;
    
    public $search = '';
    protected $queryString = ['search'];
    
    protected $listeners = ['productDeleted' => 'render'];

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        
        $product->delete();
        session()->flash('success', 'Product deleted successfully.');
        $this->dispatch('productDeleted');
    }

    public function cleanSession()
    {
        session()->forget('success');
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.products.product-index', [
            'products' => Product::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->orWhere('link', 'like', '%' . $this->search . '%')
                ->paginate(10),
        ]);
    }
}