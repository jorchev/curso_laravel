<x-layouts.app title="Create new post" meta-description="Form to create a new blog post">

<h1>Edit form</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf @method('PATCH')

    @include('posts.form-fields')

    <div>
        <button type="submit">Send</button>
    </div>
</form>

<a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
