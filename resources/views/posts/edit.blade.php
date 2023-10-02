<x-layouts.app title="Create new post" meta-description="Form to create a new blog post">

<h1>Edit form</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf @method('PATCH')
    <div>
        <label for="title">Title</label><br>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
            <div>
                <small style="color: red">{{ $message }}</small>
            </div>
        @enderror
    </div>
    <div>
        <label for="body">Body</label><br>
        <textarea name="body" id="" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
        @error('body')
            <div>
                <small style="color: red">{{ $message }}</small>
            </div>
        @enderror
    </div>
    <div>
        <button type="submit">Send</button>
    </div>
</form>

<a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
