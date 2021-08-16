@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>
                {{ $audio->title }}
            </h3>

            <div class="my-3">
                
                <audio controls style="max-width:100%;">
                    <source src="{{ $audio->link }}" >
                  Your browser does not support the audio element.
                </audio>
            </div>
        </div>
    </div>
</div>
@endsection
