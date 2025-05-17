<?php

namespace App\Livewire\Forms\MainBanner;

use Livewire\Attributes\Validate;
use Livewire\Form;

class MainBannerForm extends Form
{
    public $sub_title = '';
    public $title = '';
    public $image;
    public $currentImage = '';

    public function rules()
    {
        return [
            'sub_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'sub_title.required' => 'Sub title is required',
            'title.required' => 'Title is required',
            'image.image' => 'File must be an image',
            'image.max' => 'Image size cannot exceed 1MB',
        ];
    }

    public function setMainBanner($mainBanner)
    {
        $this->sub_title = $mainBanner->sub_title;
        $this->title = $mainBanner->title;
        $this->currentImage = $mainBanner->image;
    }
}
