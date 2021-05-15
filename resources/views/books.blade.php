<x-layout>
    <h1 class="title is-1">Books</h1>

    Books: {{ count($books) }}

    @foreach ($books as $book)
        <div class="box">
            <article class="media">
                <figure class="media-left">
                    <p class="image">
                        <img style="width: 80px; border-radius: 4px;" src="{{ URL::asset($book->cover_image) }}">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{ $book->title }}</strong> <small>{{ $book->isbn }}</small>
                            <br>
                            {{ $book->author }}
                        </p>
                    </div>
                </div>
            </article>
        </div>
    @endforeach
</x-layout>
