<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <form method="post" action="{{ route('todo.update', $todo) }}">
                    @csrf
                    @method('patch')
                    <div class="mb-6">
                        <x-input-label for="title" :value="('Title')" />
                        <x-text-input 
                            id="title" 
                            name="title" 
                            type="text" 
                            class="mt-1 block w-full" 
                            required 
                            autofocus 
                            autocomplete="title" 
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('SAVE') }}</x-primary-button>
                        <x-cancel-button href="{{ route('todo.index') }}" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>