@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h4>read</h4>
                @forelse ($audios as $audio) 
                <div>

                    <a href="{{ route('audios.show' , $audio->slug) }}">{{ $audio->title }}</a>
                </div>
                    @empty
                    no 'read' records yet
                    @endforelse
        </div>
    </div>
</div>
@endsection
