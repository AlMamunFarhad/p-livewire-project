<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg shadow-md">
                {{-- <div class="p-6 text-gray-900">
                    <div x-data="{count: 0}">
                        <button x-on:click="count++" class="bg-blue-500 py-3 px-5 text-white rounded shadow-sm hover:bg-blue-700"
                        >Grow</button>
                        <span x-text="count"  class="block mt-5 font-extrabold text-2xl pt-4"></span>
                    </div>
                </div> --}}
                {{-- <livewire:counter/> --}}
                <livewire:post-index></livewire:post-index>
            </div>
          
        </div>
    </div>
</x-app-layout>
