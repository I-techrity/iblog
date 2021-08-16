@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>
                {{ $article->title }}
            </h3>

            <div class="my-3">
                {!! $article->body !!}
            </div>
        </div>
    </div>
</div>
@endsection
