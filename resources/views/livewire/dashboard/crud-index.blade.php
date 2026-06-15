<x-layouts::app :title="__($title)">
    <div class="flex items-center justify-between mb-6">
        <div>
            <flux:heading size="xl">{{ $title }}</flux:heading>
            <flux:text>Manage all {{ strtolower($title) }} records</flux:text>
        </div>
        <flux:button wire:click="create" variant="primary">
            <flux:icon.plus class="size-4" />
            Add {{ $model === 'contact' ? '' : 'New' }} {{ $model === 'contact' ? '' : ucfirst(str_replace('_', ' ', $model)) }}
        </flux:button>
    </div>

    <div class="mb-4">
        <flux:input wire:model.live.debounce="search" placeholder="Search {{ strtolower($title) }}..." icon="magnifying-glass" />
    </div>

    <div class="overflow-x-auto rounded-xl border border-zinc-200 dark:border-zinc-700">
        <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-700">
            <thead class="bg-zinc-50 dark:bg-zinc-800">
                <tr>
                    @foreach($columns as $col)
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider cursor-pointer hover:text-zinc-700 dark:hover:text-zinc-200" wire:click="sortBy('{{ $col }}')">
                            <div class="flex items-center gap-1">
                                {{ ucfirst(str_replace('_', ' ', $col)) }}
                                @if($sortField === $col)
                                    <flux:icon.chevron-{{ $sortDirection === 'asc' ? 'up' : 'down' }} class="size-3" />
                                @endif
                            </div>
                        </th>
                    @endforeach
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-zinc-900 divide-y divide-zinc-200 dark:divide-zinc-700">
                @forelse($records as $record)
                    <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-800">
                        @foreach($columns as $col)
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-700 dark:text-zinc-300">
                                @if($col === 'is_active')
                                    @if($record->{$col})
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Active</span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">Inactive</span>
                                    @endif
                                @elseif($col === 'image' || $col === 'logo')
                                    @if($record->{$col})
                                        <img src="{{ asset('images/' . $record->{$col}) }}" class="w-10 h-10 object-cover rounded">
                                    @else
                                        <span class="text-zinc-400">—</span>
                                    @endif
                                @elseif(strlen($record->{$col} ?? '') > 50)
                                    {{ substr($record->{$col}, 0, 50) }}...
                                @else
                                    {{ $record->{$col} ?? '—' }}
                                @endif
                            </td>
                        @endforeach
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                            <flux:button wire:click="edit({{ $record->id }})" variant="ghost" size="sm" icon="pencil" />
                            <flux:button wire:click="delete({{ $record->id }})" wire:confirm="Are you sure you want to delete this record?" variant="ghost" size="sm" icon="trash" class="text-red-500 hover:text-red-700" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($columns) + 1 }}" class="px-6 py-12 text-center text-sm text-zinc-500">
                            No records found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $records->links() }}
    </div>

    <flux:modal wire:model="showModal" class="min-w-[600px]">
        <div class="space-y-6 p-2">
            <div>
                <flux:heading size="lg">{{ $editId ? 'Edit' : 'Add' }} {{ ucfirst(str_replace('_', ' ', $model)) }}</flux:heading>
                <flux:text>Fill in the details below.</flux:text>
            </div>

            <form wire:submit="save" class="space-y-4">
                @foreach($fields as $field => $config)
                    @if($config['type'] === 'checkbox')
                        <label class="flex items-center gap-3">
                            <input type="checkbox" wire:model="{{ $field }}" class="rounded border-zinc-300 dark:border-zinc-600" value="1" {{ ${$field} ? 'checked' : '' }}>
                            <span class="text-sm font-medium">{{ $config['label'] }}</span>
                        </label>
                    @elseif($config['type'] === 'textarea')
                        <div>
                            <label class="block text-sm font-medium mb-1">{{ $config['label'] }}</label>
                            <textarea wire:model="{{ $field }}" rows="3" class="w-full rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 px-4 py-2 text-sm focus:ring-2 focus:ring-indigo-500"></textarea>
                            @error($field) <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    @elseif($config['type'] === 'select')
                        <div>
                            <label class="block text-sm font-medium mb-1">{{ $config['label'] }}</label>
                            <select wire:model="{{ $field }}" class="w-full rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 px-4 py-2 text-sm focus:ring-2 focus:ring-indigo-500">
                                <option value="">Select...</option>
                                @foreach(($config['options'] ?? []) as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            @error($field) <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    @else
                        <div>
                            <label class="block text-sm font-medium mb-1">{{ $config['label'] }}</label>
                            <input type="{{ $config['type'] ?? 'text' }}" wire:model="{{ $field }}" class="w-full rounded-lg border border-zinc-300 dark:border-zinc-600 bg-white dark:bg-zinc-800 px-4 py-2 text-sm focus:ring-2 focus:ring-indigo-500" />
                            @error($field) <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    @endif
                @endforeach

                <div class="flex justify-end gap-3 pt-4">
                    <flux:button variant="ghost" type="button" wire:click="$set('showModal', false)">Cancel</flux:button>
                    <flux:button variant="primary" type="submit">Save</flux:button>
                </div>
            </form>
        </div>
    </flux:modal>
</x-layouts::app>
