<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ $author->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-10">
                    
                    <h1 class="text-4xl font-bold text-gray-900 leading-tight">
                        {{ $author->name }}
                    </h1>
                    
                    <hr class="my-8">

                    <h3 class="text-2xl font-semibold mb-4">Біографія</h3>
                    <div class="prose prose-lg max-w-none text-gray-800 mb-10">
                        {{ $author->bio }}
                    </div>

                    <h3 class="text-2xl font-semibold mb-4">Твори Автора</h3>
                    <ul class="list-disc list-inside space-y-3">
                        @forelse ($author->books as $book)
                            <li class="text-lg">
                                <a href="{{ route('books.show', $book) }}" class="text-blue-700 hover:underline">
                                    {{ $book->title }}
                                </a>
                            </li>
                        @empty
                            <li class="text-gray-500 italic">Твори цього автора ще не додані.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>