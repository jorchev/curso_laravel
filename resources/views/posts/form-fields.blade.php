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
