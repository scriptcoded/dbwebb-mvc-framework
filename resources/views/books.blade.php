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

    <h3 class="title">Create book</h3>

    <form method="POST" action="{{ URL::Route('books.create') }}" class="mb-4">
        @csrf

        <div class="field">
            <label class="label">ISBN</label>
            <div class="control">
                <input class="input" type="text" name="isbn" placeholder="ISBN">
            </div>
        </div>
    
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Title">
            </div>
        </div>
    
        <div class="field">
            <label class="label">Author</label>
            <div class="control">
                <input class="input" type="text" name="author" placeholder="Author">
            </div>
        </div>
    
        <div class="field">
            <label class="label">Cover Image</label>
            <div class="control">
                <input class="input" type="text" name="cover_image" placeholder="Cover Image">
            </div>
        </div>
        
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Create</button>
            </div>
        </div>
    </form>
</x-layout>
