<?php

namespace App\Livewire\MainBanner;

use App\Models\MainBanner;
use Livewire\Component;
use Livewire\WithPagination;

class MainIndex extends Component
{
    protected $listeners = ['bannerUpdated' => 'render'];
    
    public function cleanSession()
    {
        session()->forget('success');
    }

    public function render()
    {
        return view('livewire.main-banner.main-index', [
            'banners' => MainBanner::all(),
        ]);
    }
}
