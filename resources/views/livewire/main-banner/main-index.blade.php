<section>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Main Banners') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your main banner data') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div class="flex justify-between items-center mb-4">
        <div class="w-1/3">
            <p class="text-sm text-gray-600 dark:text-gray-400" hidden>
                These banners are displayed on the main slider of your website's homepage.
            </p>
        </div>
        <flux:button href="{{ route('main-banner.edit') }}" class="justify-end">EDIT BANNERS</flux:button>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Sub Title</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach (\App\Models\MainBanner::all() as $banner)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">{{ $banner->id }}</td>
                        <td class="px-6 py-4">{{ $banner->sub_title }}</td>
                        <td class="px-6 py-4">{{ $banner->title }}</td>
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image"
                                class="w-24 h-16 object-cover">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if (session()->has('success'))
        <div x-data="" x-init="setTimeout(() => { $wire.cleanSession() }, 2000)" x-transition:enter="transition ease-out duration-300"
            id="toast-top-right"
            class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow-sm top-5 right-5 dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button wire:click="cleanSession" type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                </svg>
            </button>
        </div>
    @endif
</section>
