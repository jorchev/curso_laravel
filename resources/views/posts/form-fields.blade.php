<div class="space-y-4">
    <label class="flex flex-col">
        <span class="text-slate-600 dark:text-slate-400">Title</span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
        <div>
            <small class="font-bold text-red-500/80">{{ $message }}</small>
        </div>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="text-slate-600 dark:text-slate-400">Body</span>
        <textarea class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" cols="30" rows="10" name="body" id="body">{{ old('body', $post->body) }}</textarea>
        @error('body')
            <div>
                <small class="font-bold text-red-500/80">{{ $message }}</small>
            </div>
        @enderror
    </label>
</div>
