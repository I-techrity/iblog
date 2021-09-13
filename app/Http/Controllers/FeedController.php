<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Audio;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    //
    public function index()
    {
        

        $articles = Article::latest()->with(['tags', 'categories' , 'owner'])->paginate(10 , ['*'] , 'article_pagination');
        $audios = Audio::latest()->with(['tags', 'categories' , 'owner'])->paginate(10 , ['*'] , 'audio_pagination');
        $videos = Video::latest()->with(['tags', 'categories' , 'owner'])->paginate(10 , ['*'] , 'video_pagination');
        $tags = Tag::latest()->paginate(10);
        $categories = Category::latest()->get();


        return view('feed.index' , compact('articles','audios','videos','tags','categories'));
        
    }
}
