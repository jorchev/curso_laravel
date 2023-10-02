<x-layouts.app title="Create new post" meta-description="Form to create a new blog post">

<h1>Create new post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    @include('posts.form-fields')

    <div>
        <button type="submit">Send</button>
    </div>
</form>

<a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
