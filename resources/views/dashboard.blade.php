<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">
        <div>
            <flux:heading size="xl">Dashboard</flux:heading>
            <flux:text>Welcome back, {{ auth()->user()->name }}! Here's an overview of your site.</flux:text>
        </div>

        <div class="grid auto-rows-min gap-4 md:grid-cols-4">
            <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 p-6 bg-white dark:bg-zinc-900">
                <div class="flex items-center justify-between mb-2">
                    <flux:heading class="text-2xl font-bold">{{ \App\Models\Church::count() }}</flux:heading>
                    <flux:icon.building-2 class="size-8 text-zinc-400" />
                </div>
                <flux:text class="text-sm">Churches</flux:text>
            </div>
            <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 p-6 bg-white dark:bg-zinc-900">
                <div class="flex items-center justify-between mb-2">
                    <flux:heading class="text-2xl font-bold">{{ \App\Models\Event::count() }}</flux:heading>
                    <flux:icon.calendar class="size-8 text-zinc-400" />
                </div>
                <flux:text class="text-sm">Events</flux:text>
            </div>
            <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 p-6 bg-white dark:bg-zinc-900">
                <div class="flex items-center justify-between mb-2">
                    <flux:heading class="text-2xl font-bold">{{ \App\Models\Post::count() }}</flux:heading>
                    <flux:icon.newspaper class="size-8 text-zinc-400" />
                </div>
                <flux:text class="text-sm">News Posts</flux:text>
            </div>
            <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 p-6 bg-white dark:bg-zinc-900">
                <div class="flex items-center justify-between mb-2">
                    <flux:heading class="text-2xl font-bold">{{ \App\Models\Contact::where('is_read', false)->count() }}</flux:heading>
                    <flux:icon.message-square class="size-8 text-zinc-400" />
                </div>
                <flux:text class="text-sm">Unread Messages</flux:text>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 p-6 bg-white dark:bg-zinc-900">
                <flux:heading size="base" class="mb-4">Quick Actions</flux:heading>
                <div class="space-y-3">
                    <a href="{{ route('dashboard.content', 'home') }}" wire:navigate class="flex items-center gap-3 p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
                        <flux:icon.file-text class="size-5 text-zinc-500" />
                        <span>Edit Home Page Content</span>
                    </a>
                    <a href="{{ route('dashboard.content', 'about') }}" wire:navigate class="flex items-center gap-3 p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
                        <flux:icon.file-text class="size-5 text-zinc-500" />
                        <span>Edit About Page Content</span>
                    </a>
                    <a href="{{ route('dashboard.posts') }}" wire:navigate class="flex items-center gap-3 p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
                        <flux:icon.newspaper class="size-5 text-zinc-500" />
                        <span>Manage News Posts</span>
                    </a>
                    <a href="{{ route('dashboard.churches') }}" wire:navigate class="flex items-center gap-3 p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
                        <flux:icon.building-2 class="size-5 text-zinc-500" />
                        <span>Manage Churches</span>
                    </a>
                    <a href="{{ route('dashboard.events') }}" wire:navigate class="flex items-center gap-3 p-3 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
                        <flux:icon.calendar class="size-5 text-zinc-500" />
                        <span>Manage Events</span>
                    </a>
                </div>
            </div>

            <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 p-6 bg-white dark:bg-zinc-900">
                <flux:heading size="base" class="mb-4">Recent Contact Messages</flux:heading>
                @php $recentMessages = \App\Models\Contact::orderBy('created_at', 'desc')->take(5)->get(); @endphp
                <div class="space-y-3">
                    @forelse($recentMessages as $msg)
                        <div class="flex items-start gap-3 p-3 rounded-lg {{ !$msg->is_read ? 'bg-blue-50 dark:bg-blue-900/10' : '' }}">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium truncate">{{ $msg->name }}</p>
                                <p class="text-xs text-zinc-500 truncate">{{ $msg->subject }}</p>
                                <p class="text-xs text-zinc-400">{{ $msg->created_at->diffForHumans() }}</p>
                            </div>
                            @if(!$msg->is_read)
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">New</span>
                            @endif
                        </div>
                    @empty
                        <flux:text class="text-sm">No messages yet.</flux:text>
                    @endforelse
                    @if(count($recentMessages) > 0)
                        <a href="{{ route('dashboard.contacts') }}" wire:navigate class="block text-sm text-indigo-500 hover:text-indigo-700 pt-2">View all messages →</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
