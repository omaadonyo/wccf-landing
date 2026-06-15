<x-layouts::app :title="__($title . ' Content')">
    <flux:heading size="xl" class="mb-4">{{ $title }} — Content Editor</flux:heading>
    <flux:text class="mb-8">Edit all text and images for the {{ $title }}. Changes appear immediately on the public site.</flux:text>

    <form wire:submit="save">
        <div class="space-y-6">
            @foreach($sections as $key => $data)
                <div class="rounded-xl border border-zinc-200 dark:border-zinc-700 p-6 bg-white dark:bg-zinc-900">
                    <label class="block text-sm font-medium mb-2 capitalize text-zinc-700 dark:text-zinc-300">
                        {{ str_replace(['_', '-'], ' ', $key) }}
                        <span class="text-xs text-zinc-400 ml-2">({{ $data['type'] }})</span>
                    </label>

                    @if($data['type'] === 'textarea' || $data['type'] === 'rich_text')
                        <textarea
                            wire:model="sections.{{ $key }}.value"
                            rows="4"
                            class="w-full rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 px-4 py-2 text-sm focus:ring-2 focus:ring-indigo-500"
                        ></textarea>
                    @elseif($data['type'] === 'image')
                        <div class="flex items-center gap-4">
                            <input
                                type="text"
                                wire:model="sections.{{ $key }}.value"
                                placeholder="image-filename.jpg"
                                class="flex-1 rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 px-4 py-2 text-sm focus:ring-2 focus:ring-indigo-500"
                            />
                            @if($data['value'])
                                <img src="{{ asset('images/' . $data['value']) }}" class="w-16 h-16 object-cover rounded-lg border">
                            @endif
                        </div>
                        <flux:text class="text-xs mt-1">Filename in <code>public/images/</code> folder</flux:text>
                    @else
                        <input
                            type="text"
                            wire:model="sections.{{ $key }}.value"
                            class="w-full rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 px-4 py-2 text-sm focus:ring-2 focus:ring-indigo-500"
                        />
                    @endif
                </div>
            @endforeach
        </div>

        @if(count($sections) === 0)
            <div class="rounded-xl border border-dashed border-zinc-300 dark:border-zinc-600 p-12 text-center">
                <flux:icon.document-text class="w-12 h-12 mx-auto mb-4 text-zinc-400" />
                <flux:heading class="mb-2">No editable sections yet</flux:heading>
                <flux:text>Run <code>php artisan db:seed --class=ContentSectionSeeder</code> to populate editable content.</flux:text>
            </div>
        @endif

        <div class="mt-8 flex gap-4">
            <flux:button variant="primary" type="submit" wire:loading.attr="disabled">
                Save Changes
            </flux:button>
            <flux:button variant="ghost" href="{{ route('dashboard') }}" wire:navigate>
                Back to Dashboard
            </flux:button>
        </div>
    </form>

    @if(session()->has('saved'))
        <flux:toast variant="success" text="Content saved successfully!" />
    @endif
</x-layouts::app>
