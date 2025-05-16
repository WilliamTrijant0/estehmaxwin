<section>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Products') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your product data') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div class="flex justify-between items-center mb-4">
        <div class="w-1/3">
            <flux:input wire:model.live.debounce.300ms="search" type="text" placeholder="Search products..." />
        </div>
        <flux:button href="{{ route('products.create') }}" class="justify-end">ADD</flux:button>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3 w-1/4">Description</th>
                    <th scope="col" class="px-6 py-3">Price</th>
                    <th scope="col" class="px-6 py-3">Link</th>
                    <th scope="col" class="px-6 py-3">Image</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $product->name }}
                        </th>
                        <td class="px-6 py-4">
                            <div class="line-clamp-2 prose prose-sm max-w-none dark:prose-invert">{!! $product->description !!}</div>
                        </td>
                        <td class="px-6 py-4">
                            Rp. {{ number_format($product->price) }}
                        </td>
                        <td class="px-6 py-4">
                            @if($product->link)
                                <a href="{{ $product->link }}" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    {{ \Illuminate\Support\Str::limit($product->link, 30) }}
                                </a>
                            @else
                                <span class="text-gray-400">No link provided</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="px-6 py-4 flex space-x-4 rtl:space-x-reverse">
                            <a href="{{ route('products.edit', $product->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <button wire:click="deleteProduct({{ $product->id }})" wire:confirm="Are you sure you want to delete this product?" type="button" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <td colspan="7" class="px-6 py-4 text-center">
                            No products found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>

    @if (session()->has('success'))
        <div 
            x-data="" 
            x-init="setTimeout(() => {$wire.cleanSession()}, 2000)"
            x-transition:enter="transition ease-out duration-300"
            id="toast-top-right"
            class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow-sm top-5 right-5 dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800"
            role="alert">
            <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button wire:click="cleanSession" type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
</section>