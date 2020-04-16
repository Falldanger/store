@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>
    @foreach($posts as $post)
    <div><ul>
            <li>{{$post->title}}</li>
            <li>{{$post->category}}</li>
            <li>{{$post->author_id}}</li>
        </ul>
    </div>
    @endforeach

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
@endsection
