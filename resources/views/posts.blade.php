@extends('layouts.main')


@section('container')
<a href="{{ route('blog.create') }}">Create Data</a>    

@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    </h2>
    <h5>By : {{ $post["author"] }}</h5>
    <p>{{ $post ["body"] }}</p>
</article>
@endforeach

@endsection

