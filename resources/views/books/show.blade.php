<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ $book->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-10">
                    
                    <h1 class="text-4xl font-bold text-gray-900 leading-tight">
                        {{ $book->title }}
                    </h1>
                    
                    <p class="mt-4 text-xl text-gray-700">
                        Автор: 
                        <a href="{{ route('authors.show', $book->author) }}" class="text-blue-700 hover:underline">
                            {{ $book->author->name }}
                        </a>
                    </p>
                    
                    <hr class="my-8">

                    <h3 class="text-2xl font-semibold mb-4">Анотація</h3>
                    <div class="prose prose-lg max-w-none text-gray-800">
                        {{ $book->description }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>