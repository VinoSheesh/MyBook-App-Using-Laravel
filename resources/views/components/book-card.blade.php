<div class="max-w-xs rounded overflow-hidden shadow-lg bg-white m-4">
    <a href="{{ route('books.show', $book->id) }}">
        <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $book->title }}</div>
            <p class="text-gray-700 text-base">
                Tahun Rilis: {{ $book->year }}
            </p>
        </div>
    </a>
</div>