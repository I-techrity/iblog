@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h4>read</h4>
                @forelse ($videos as $video) 
                <div>

                    <a href="{{ route('videos.show' , $video->slug) }}">{{ $article->title }}</a>
                </div>
                    @empty
                    no 'read' records yet
                    @endforelse
        </div>
    </div>
</div>
@endsection
