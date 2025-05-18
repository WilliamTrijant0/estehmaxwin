<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 p-4 rounded-xl">
        <div class="flex justify-between items-center mb-2">
            <flux:heading size="xl" level="1">{{ __('Dashboard') }}</flux:heading>
        </div>
        
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold">Total Products</h3>
                    <span class="text-2xl font-bold">{{ \App\Models\Product::count() }}</span>
                </div>
                <div class="mt-2">
                    <flux:button href="{{ route('products.index') }}" size="sm">View Products</flux:button>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold">Main Banners</h3>
                    <span class="text-2xl font-bold">{{ \App\Models\MainBanner::count() }}</span>
                </div>
                <div class="mt-2">
                    <flux:button href="{{ route('main-banner.index') }}" size="sm">View Banners</flux:button>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold">Users</h3>
                    <span class="text-2xl font-bold">{{ \App\Models\User::count() }}</span>
                </div>
            </div>
        </div>
        
        <div class="grid gap-6 md:grid-cols-2">
            <!-- Recent Products -->
            <div class="relative h-[500px] overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800">
                <h3 class="text-lg font-semibold mb-4">Recent Products</h3>
                <div class="overflow-x-auto h-[calc(100%-3rem)]">
                    <div class="h-full overflow-y-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Price</th>
                                    <th scope="col" class="px-6 py-3">Image</th>
                                    {{-- <th scope="col" class="px-6 py-3">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Product::latest()->take(10)->get() as $product)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">{{ $product->name }}</td>
                                        <td class="px-6 py-4">{{ $product->price }}</td>
                                        <td class="px-6 py-4">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-16 h-12 object-cover">
                                        </td>
                                        {{-- <td class="px-6 py-4">
                                            <flux:button href="{{ route('products.edit', $product) }}" size="xs">Edit</flux:button>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Main Banners -->
            <div class="relative h-[500px] overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800">
                <h3 class="text-lg font-semibold mb-4">Main Banners</h3>
                <div class="overflow-x-auto h-[calc(100%-3rem)]">
                    <div class="h-full overflow-y-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Sub Title</th>
                                    <th scope="col" class="px-6 py-3">Title</th>
                                    <th scope="col" class="px-6 py-3">Image</th>
                                    {{-- <th scope="col" class="px-6 py-3">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\MainBanner::all() as $banner)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">{{ $banner->sub_title }}</td>
                                        <td class="px-6 py-4">{{ $banner->title }}</td>
                                        <td class="px-6 py-4">
                                            <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image" class="w-16 h-12 object-cover">
                                        </td>
                                        {{-- <td class="px-6 py-4">
                                            <flux:button href="{{ route('main-banner.edit') }}" size="xs" >Edit</flux:button>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
