<x-layouts::app :title="__($title)">
    <div class="flex items-center justify-between mb-6">
        <div>
            <flux:heading size="xl">{{ $title }}</flux:heading>
            <flux:text>Messages from the contact form</flux:text>
        </div>
    </div>

    <div class="mb-4">
        <flux:input wire:model.live.debounce="search" placeholder="Search messages..." icon="magnifying-glass" />
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
                    <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-800 {{ !$record->is_read ? 'font-semibold bg-blue-50 dark:bg-blue-900/10' : '' }}">
                        @foreach($columns as $col)
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-700 dark:text-zinc-300">
                                @if($col === 'is_read')
                                    @if($record->{$col})
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Read</span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">New</span>
                                    @endif
                                @elseif($col === 'created_at')
                                    {{ $record->{$col} ? $record->{$col}->diffForHumans() : '—' }}
                                @else
                                    {{ $record->{$col} ?? '—' }}
                                @endif
                            </td>
                        @endforeach
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                            @if(!$record->is_read)
                                <flux:button wire:click="markAsRead({{ $record->id }})" variant="ghost" size="sm" icon="check" />
                            @endif
                            <flux:button wire:click="edit({{ $record->id }})" variant="ghost" size="sm" icon="eye" />
                            <flux:button wire:click="delete({{ $record->id }})" wire:confirm="Delete this message?" variant="ghost" size="sm" icon="trash" class="text-red-500 hover:text-red-700" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($columns) + 1 }}" class="px-6 py-12 text-center text-sm text-zinc-500">
                            No messages found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $records->links() }}</div>

    <flux:modal wire:model="showModal" class="min-w-[500px]">
        <div class="space-y-4 p-2">
            <flux:heading size="lg">Message Details</flux:heading>
            @if($editId && ($msg = \App\Models\Contact::find($editId)))
                <div class="space-y-3">
                    <div><strong>Name:</strong> {{ $msg->name }}</div>
                    <div><strong>Email:</strong> {{ $msg->email }}</div>
                    <div><strong>Phone:</strong> {{ $msg->phone ?? '—' }}</div>
                    <div><strong>Subject:</strong> {{ $msg->subject }}</div>
                    <div><strong>Sent:</strong> {{ $msg->created_at->format('M d, Y h:i A') }}</div>
                    <div class="pt-3 border-t">
                        <strong>Message:</strong>
                        <p class="mt-2 text-sm leading-relaxed whitespace-pre-wrap">{{ $msg->message }}</p>
                    </div>
                </div>
            @endif
            <div class="flex justify-end pt-4">
                <flux:button variant="ghost" wire:click="$set('showModal', false)">Close</flux:button>
            </div>
        </div>
    </flux:modal>
</x-layouts::app>
