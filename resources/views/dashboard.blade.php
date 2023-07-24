<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <ul>
<li><a href="/posts" wire:navigate>Posts</a></li>
<li><a href="/create-post" wire:navigate>Create Post</a></li>
<li><a href="/update-post" wire:navigate>Update Post</a></li>
<li><a href="/delete-post" wire:navigate>Delete Post</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
