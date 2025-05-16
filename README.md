# Ogenix - Laravel Blade Component System

## Overview
This project implements a component-based layout structure for a Laravel application using Blade components. The system modularizes the template into reusable components for improved maintainability and development efficiency.

## Key Features
- **Modular Architecture**: Breaks down UI into reusable components
- **Consistent Design Language**: Standardized styling across components
- **Parameterized Components**: Components accept parameters for customization
- **Organized Structure**: Logical folder hierarchy for component organization
- **Documentation**: Comprehensive documentation and examples

## Component Structure

### Layout Components
- `x-layouts.main` - Base layout with header, content area, and footer

### Base UI Components
- `x-header` - Site header
- `x-footer` - Site footer
- `x-breadcrumb` - Page header with breadcrumb navigation
- `x-section-divider` - Visual section divider
- `x-about` - Configurable about section
- `x-search-form` - Search functionality
- `x-newsletter-signup` - Newsletter signup form
- `x-pagination` - Custom pagination styling

### Product Components
- `x-product-card` - Individual product display card
- `x-product-grid` - Grid layout for multiple products

### Content Section Components
- `x-home.hero-slider` - Hero slider for homepage
- `x-home.features` - Features section
- `x-home.categories` - Categories section
- `x-gallery` - Image gallery/portfolio grid
- `x-testimonials` - Testimonials section
- `x-counter-stats` - Animated statistics counter
- `x-news-section` - Blog/news section
- `x-cta-banner` - Call-to-action banner

## Routes
- `/` - Home page using components
- `/component-example` - Example page showcasing component usage
- `/components-docs` - Documentation for all available components
- `/search` - Search results page using components

## Installation
1. Clone the repository
2. Install dependencies: `composer install && npm install`
3. Copy `.env.example` to `.env` and configure database
4. Generate application key: `php artisan key:generate`
5. Run migrations: `php artisan migrate`
6. Serve the application: `php artisan serve`

## Usage
Visit `/components-docs` to see full documentation for all available components.
Visit `/component-example` to see examples of the components in action.

## Benefits
- **Improved Maintainability**: Changes to a component propagate to all instances
- **Faster Development**: Reuse existing components instead of writing from scratch
- **Better Collaboration**: Clear component boundaries make teamwork easier
- **Consistent UX/UI**: Standardized components ensure visual consistency

## Example
```php
<x-layouts.main>
    <x-slot name="title">Home | Ogenix</x-slot>
    
    <x-home.hero-slider :slides="$slides" />
    
    <x-home.features :features="$features" />
    
    <x-section-divider 
        title="Organic Food For A Healthier You" 
        subtitle="Discover our wide range of organic products" 
        color="green" 
    />
    
    <x-product-grid title="Featured Products" subtitle="Check Out Our Products">
        @foreach($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <x-product-card 
                    :title="$product->name" 
                    :price="$product->price" 
                    :rating="$product->rating" 
                    :image="$product->image"  
                />
            </div>
        @endforeach
    </x-product-grid>
    
    <x-newsletter-signup />
    
</x-layouts.main>
```

## Documentation
For full component documentation, see `resources/views/component-system-docs.md` or visit `/components-docs` in the browser.
