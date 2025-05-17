<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainBannerSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'sub_title' => 'Only Organic Products',
                'title' => 'Stay Healthy & Eat Organic',
                'image' => 'main-banners/slider-1.jpg',
            ],
            [
                'sub_title' => 'Fresh From Our Farm',
                'title' => 'Natural & Healthy Food',
                'image' => 'main-banners/slider-2.jpg',
            ],
            [
                'sub_title' => '100% Organic Food',
                'title' => 'Healthy Food for Healthy Life',
                'image' => 'main-banners/slider-3.jpg',
            ]
        ];

        foreach ($banners as $banner) {
            \App\Models\MainBanner::create($banner);
        }
    }
}
