<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Posts from ead laboratory') }}
            </h2>
            <a href="{{route('post.create')}}" class="bg-sky-500 p-3 text-white font-bold rounded-lg mr-2">Create new post</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('success'))
                <div class="bg-lime-500 p-3 text-white text-center">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="bg-red-500 p-3 text-white text-center">
                    {{ session('error') }}
                </div>
                @endif
                <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-3 gap-3">
                    @foreach($data as $dt)
                    <div class="p-3 rounded-lg shadow">
                        <h2 class="font-bold text-2xl">{{$dt->title}}</h2>
                        <p class="mb-4 mt-2">{{ $dt->created_at->diffForHumans() }}</p>
                        <p class="font-base mb-3">{{$dt->description}}</p>
                        <hr class="mb-2" />
                        <div>
                            <a type="submit" href="{{ route('post.show', $dt->id )}}" class="bg-lime-500 p-3 text-white font-bold rounded-lg mr-2">show</a>
                            <a type="submit" href="{{ route('post.edit', $dt->id )}}" class="bg-amber-500 p-3 text-white font-bold rounded-lg mr-2">Edit</a>
                            <form class="inline" action="{{ route('post.destroy', $dt->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-rose-500 p-3 text-white font-bold rounded-lg">Delete</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>