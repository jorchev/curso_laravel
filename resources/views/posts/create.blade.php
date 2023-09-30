<x-layouts.app title="Create new post" meta-description="Form to create a new blog post">

<h1>Create new post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title</label><br>
        <input type="text" name="title">
    </div>
    <div>
        <label for="body">Body</label><br>
        <textarea name="body" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Send</button>
    </div>
</form>

<a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
