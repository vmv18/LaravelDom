<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Літературний Архів') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-8">

                <div class="md:col-span-2">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 md:p-8">
                            <h3 class="text-xl font-semibold mb-6">Останні надходження</h3>
                            <div class="space-y-6">
                                @forelse ($books as $book)
                                    <article class="border-b border-gray-200 pb-6">
                                        <h4 class="text-lg font-bold">
                                            <a href="{{ route('books.show', $book) }}" class="text-gray-900 hover:text-blue-700">
                                                {{ $book->title }}
                                            </a>
                                        </h4>
                                        <p class="text-sm text-gray-600 mt-1">
                                            <a href="{{ route('authors.show', $book->author) }}" class="hover:underline">
                                                {{ $book->author->name }}
                                            </a>
                                        </p>
                                    </article>
                                @empty
                                    <p class="text-gray-500">Наразі книг у архіві немає.</p>
                                @endforelse
                            </div>
                            <div class="mt-8">
                                {{ $books->links() }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-1 mt-6 md:mt-0">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">
                            <h4 class="font-semibold text-gray-800 mb-3">Про Архів</h4>
                            <p class="text-sm text-gray-600">
                                Ласкаво просимо до нашого цифрового архіву. Тут зібрані унікальні видання та біографії їхніх авторів.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>