<?php

namespace App\Livewire\Forms\Products;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product;
    public $name = '';
    public $description = '';
    public $price = '';
    public $image;
    public $link = '';

    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'link' => 'nullable|url|max:255',
        ];

        if (!isset($this->product) || !$this->product->exists()) {
            $rules['image'] = 'required|image|max:2048';
        } else {
            $rules['image'] = 'nullable|image|max:2048';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Product name is required',
            'description.required' => 'Product description is required',
            'price.required' => 'Product price is required',
            'price.numeric' => 'Price must be a number',
            'price.min' => 'Price cannot be negative',
            'image.required' => 'Product image is required',
            'image.image' => 'File must be an image',
            'image.max' => 'Image size cannot exceed 2MB',
            'link.url' => 'Link must be a valid URL',
            'link.max' => 'Link cannot exceed 255 characters',
        ];
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->link = $product->link;
    }

    public function store()
    {
        $data = $this->validate();

        // Set default WhatsApp link if link is empty
        if (empty($data['link'])) {
            $data['link'] = "https://api.whatsapp.com/send?phone=628952292484&text=Saya%20mau%20beli%20es%20teh%20maxwin";
        }

        if ($this->image) {
            $data['image'] = $this->image->store('products', 'public');
        }
        
        Product::create($data);
        $this->reset();
    }
    
    public function update()
    {
        $data = $this->validate();

        // Set default WhatsApp link if link is empty
        if (empty($data['link'])) {
            $data['link'] = "https://api.whatsapp.com/send?phone=628952292484&text=Saya%20mau%20beli%20es%20teh%20maxwin";
        }

        if ($this->product) {
            $data['image'] = $this->product->image;

            if ($this->image) {
                // Delete old image if it exists
                if ($this->product->image && Storage::disk('public')->exists($this->product->image)) {
                    Storage::disk('public')->delete($this->product->image);
                }
                $data['image'] = $this->image->store('products', 'public');
            }
            
            $this->product->update($data);
            $this->reset();
        }
    }
}