@extends('admin.layout')

@section('content')
    <div class="mb-4 flex items-center justify-between gap-3">
        <h2 class="text-lg font-semibold">Edit Post</h2>
        <a href="{{ route('admin.posts.index') }}" class="rounded-full border border-white/20 px-4 py-2 text-sm">Back</a>
    </div>

    <form method="POST" action="{{ route('admin.posts.update', $post) }}" class="space-y-4">
        @csrf
        @method('PUT')
        @include('admin.posts._form', ['post' => $post])

        <button type="submit" class="rounded-full bg-cyan-500 px-5 py-2 text-sm font-medium text-slate-900 transition hover:bg-cyan-300">Update Post</button>
    </form>
@endsection
