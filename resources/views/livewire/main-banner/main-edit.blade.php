<section>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Main Banner') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Update your main banner information') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    @if (session('success'))
        <div class="p-4 mb-6 text-sm text-white bg-green-500 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="save" class="flex flex-col gap-6">
        <div>
            <label for="selectedBannerId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Banner</label>
            <flux:select wire:model="selectedBannerId" wire:change="selectBanner($event.target.value)" class="block w-full">
                @foreach ($mainBanners as $banner)
                    <option value="{{ $banner->id }}">Banner {{ $banner->id }}</option>
                @endforeach
            </flux:select>
        </div>
        
        <!-- sub title -->
        <flux:input wire:model="form.sub_title" label="Sub Title" type="text" required autofocus />
        {{-- <flux:error :messages="$errors->get('form.sub_title')" class="mt-2" /> --}}
        
        <!-- title -->
        <flux:input wire:model="form.title" label="Title" type="text" required />
        {{-- <flux:error :messages="$errors->get('form.title')" class="mt-2" /> --}}
        
        <!-- image -->
        <flux:input wire:model="form.image" label="Image" type="file" />
        <div class="flex gap-2">
            @if ($form->currentImage)
                <div class="relative">
                    <img src="{{ asset('storage/' . $form->currentImage) }}" alt="Current Banner" 
                         class="w-32 h-32 object-cover rounded border border-zinc-300 dark:border-zinc-700 {{ $form->image ? 'opacity-30' : '' }}">
                    @if($form->image)
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">Current Image</span>
                        </div>
                    @endif
                </div>
            @endif
            @if ($form->image)
                <img src="{{ $form->image->temporaryUrl() }}" class="w-32 h-32 object-cover rounded">
            @endif
        </div>
        <div wire:loading wire:target="form.image">Uploading...</div>
        {{-- <flux:error :messages="$errors->get('form.image')" class="mt-2" /> --}}
        <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">Max file size: 1MB</p>

        <div class="flex justify-center gap-10">
            <flux:button variant="primary" type="submit" class="w-4xl">Save</flux:button>
            <flux:button variant="danger" href="{{ route('main-banner.index') }}" class="w-4xl">Cancel</flux:button>
        </div>
    </form>
</section>
