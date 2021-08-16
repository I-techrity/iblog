@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>
                {{ $video->title }}
            </h3>

            <div class="my-3">
                <video controls style="max-width:100%;">
                    <source src="{{ $video->link }}" >
                  Your browser does not support the audio element.
                </video>            
            </div>
        </div>
    </div>
</div>
@endsection
