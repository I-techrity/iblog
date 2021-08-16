@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between">

                <h3>
                    {{  $user->name }} profile
                </h3>
                @if ($user->id === Auth::id())
                    
                    <div>
                        <a href="{{ route('voyager.users.edit' , Auth::id()) }}">Profile Settings</a>
                    </div>
                @endif
            </div>

            <div class="my-3">
                <h4>read</h4>
                @forelse ($user->articles as $article) 
                <div>

                    <a href="{{ route('articles.show' , $article->slug) }}">{{ $article->title }}</a>
                </div>
                    @empty
                    no 'read' records yet
                    @endforelse
            </div>
            <div class="my-3">
                <h4>hear</h4>
                @forelse ($user->audios as $audio) 
                <div>

                    <a href="{{ route('audios.show' , $audio->slug) }}">{{ $audio->title }}</a>
                </div>
                    @empty
                    no 'hear' records yet
                    @endforelse
            </div>
            <div class="my-3">
                <h4>watch</h4>
                @forelse ($user->videos as $video) 
                <div>

                    <a href="{{ route('videos.show' , $video->slug) }}">{{ $video->title }}</a>
                </div>
                    @empty
                    no 'watch' records yet
                    @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
