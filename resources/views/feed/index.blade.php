@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>
Feed
            </h3>

            <div class="my-3">
                articles
                <br>
                {{ dump($articles) }}
             </div>

             <div class="my-3">
                 audios
                 <br>
                {{ dump($audios) }}
             </div>

             <div class="my-3">
                 videos
                 <br>
                {{ dump($videos) }}
             </div>

             <div class="my-3
             ">tags
             <br>
                {{ dump($tags) }}
             </div>

             <div class="my-3">
                 categories
                 <br>
                {{ dump($categories) }}
             </div>

             
        </div>
    </div>
</div>
@endsection
