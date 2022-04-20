<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @error('title')
                <div class="bg-red-600 text-white font-semibold py-3 pl-5 text-center">
                    <p class="text-center">{{ $message }}</p>
                </div>
                @enderror
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('post.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label><span class="font-semibold">Title</span></label>
                            <input type="text" name="title" class="p-3 border-1 border-blue-400 w-full mt-2 rounded-lg" />
                        </div>
                        <div class="mb-3">
                            <label><span class="font-semibold">Description</span></label>
                            <textarea name="description" class="p-3 border-1 border-blue-400 w-full mt-2 rounded-lg"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-sky-500 p-3 text-white font-bold rounded-lg mr-5">Create</button>
                            <button type="submit" class="bg-rose-400 p-3 text-white font-bold rounded-lg">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>