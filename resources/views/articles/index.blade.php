@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h4>read</h4>
                @forelse ($articles as $article) 
                <div>

                    <a href="{{ route('articles.show' , $article->slug) }}">{{ $article->title }}</a>
                </div>
                    @empty
                    no 'read' records yet
                    @endforelse
        </div>
    </div>
</div>
@endsection
