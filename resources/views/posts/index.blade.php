@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    <hr class="mb-2">
    @if (count($posts) >0)
        @foreach ($posts as $post)
                <div class="max-w-sm bg-white border-2 border-gray-300 mb-2 p-6 rounded-md tracking-wide shadow-lg">
                    <h3>
                        <a href="{{url('/Post')}}/{{$post->id}}" class="decoration-double underline decoration-indigo-300 bgcolor-grey-300 bg-grey-300 shadow-lg shadow-grey-300/50 text-cyan-500">
                            {{$post->title}}
                        </a>
                    </h3>
                    {!!$post->body!!}
                </div>
                <small class="italic text-gray-600 mb-2" >written at {{$post->created_at}}</small>
                <hr class="mb-2">
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No Posts found</p>
    @endif   
@endsection