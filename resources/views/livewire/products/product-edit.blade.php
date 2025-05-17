<section>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Products') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Edit product data') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <form wire:submit="updateProduct" class="flex flex-col gap-6">
        <!-- name -->
        <flux:input wire:model="form.name" label="Name" type="text" required />
        
        <!-- desc with WYSIWYG -->
        <div>
            <label for="editor-container" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <div wire:ignore>
                <!-- Hidden input to store actual value -->
                <input type="hidden" id="description-input" wire:model="form.description">
                <!-- Quill editor container -->
                <div id="editor-container" style="height: 300px;"></div>
            </div>
            @error('form.description') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        
        <!-- price -->
        <flux:input wire:model="form.price" label="Price" type="number" step="0.01" required />
        
        <!-- link -->
        <div class="space-y-1">
            <flux:input wire:model="form.link" label="Link" type="url" placeholder="https://api.whatsapp.com/send?phone=628952292484&text=" />
            <p class="text-sm text-gray-500">Leave empty to use default WhatsApp contact link</p>
        </div>
        
        <!-- image -->
        <flux:input wire:model="form.image" label="Image" type="file" />
        <div class="flex gap-2">
            <div class="relative">
                <img src="{{asset('storage/' . $form->product->image)}}" @class(['w-32 h-32 object-cover rounded', 'opacity-30' => $form->image])>
                @if($form->image)
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">Current Image</span>
                    </div>
                @endif
            </div>
            @if ($form->image)
                <img src="{{ $form->image->temporaryUrl() }}" class="w-32 h-32 object-cover rounded">
            @endif
        </div>

        <div class="flex justify-center gap-10">
            <flux:button variant="primary" type="submit" class="w-4xl">Save</flux:button>
            <flux:button variant="danger" href="{{ route('products.index') }}" class="w-4xl">Cancel</flux:button>
        </div>
    </form>
</section>

@push('scripts')
<script>
    document.addEventListener('livewire:initialized', function () {
        var quill = new Quill('#editor-container', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'color': [] }, { 'background': [] }],
                    ['link', 'image'],
                    ['clean']
                ]
            },
            placeholder: 'Write product description here...'
        });

        // Set initial content
        const descriptionInput = document.getElementById('description-input');
        if (descriptionInput.value) {
            quill.root.innerHTML = descriptionInput.value;
        }

        // Update hidden input when text changes
        quill.on('text-change', function() {
            let html = quill.root.innerHTML;
            // Update the hidden input
            descriptionInput.value = html;
            // Dispatch an input event so Livewire knows the value has changed
            descriptionInput.dispatchEvent(new Event('input', { 
                bubbles: true,
                cancelable: true,
            }));
        });
    });
</script>
@endpush