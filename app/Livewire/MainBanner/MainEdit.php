<?php

namespace App\Livewire\MainBanner;

use App\Livewire\Forms\MainBanner\MainBannerForm;
use App\Models\MainBanner;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;

class MainEdit extends Component
{
    use WithFileUploads;
    
    public MainBannerForm $form;
    public $mainBanners = [];
    public $selectedBannerId = null;
    
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
        $this->mainBanners = MainBanner::all();
        if ($this->mainBanners->count() > 0) {
            $this->selectedBannerId = $this->mainBanners->first()->id;
            $this->selectBanner($this->selectedBannerId);
        }
    }

    public function selectBanner($bannerId)
    {
        $this->selectedBannerId = $bannerId;
        $mainBanner = MainBanner::findOrFail($bannerId);
        $this->form->setMainBanner($mainBanner);
    }

    public function save()
    {
        $this->validate();
        
        $mainBanner = MainBanner::findOrFail($this->selectedBannerId);
        
        $mainBanner->sub_title = $this->form->sub_title;
        $mainBanner->title = $this->form->title;
        
        if ($this->form->image) {
            // Remove old image if it exists
            if ($mainBanner->image && Storage::disk('public')->exists($mainBanner->image)) {
                Storage::disk('public')->delete($mainBanner->image);
            }
            
            // Store the new image
            $imageName = 'main-banners/' . Str::random(20) . '.' . $this->form->image->getClientOriginalExtension();
            $this->form->image->store('main-banners', 'public');
            $mainBanner->image = 'main-banners/' . $this->form->image->hashName();
        }
        
        $mainBanner->save();
        
        $this->dispatch('bannerUpdated');
        session()->flash('success', 'Main banner updated successfully!');
        return redirect()->route('main-banner.index');
    }

    public function render()
    {
        return view('livewire.main-banner.main-edit');
    }
}
