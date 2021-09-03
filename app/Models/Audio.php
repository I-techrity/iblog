<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class Audio extends Model
{
    use HasFactory;
    protected $table = 'audio';
    protected $appends = ['link'];
    public static $rules = [
        'file.*' => 'required|file|mimes:mp3,aac,wav,flac'
    ];
    public function getLinkAttribute() {
        return  '/storage/'.json_decode($this->file)[0]->download_link;
    }
    public function owner()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $slug = Str::slug($model->title , '-' , null);
            if($count = $model->where('slug' , $slug)->get()->count()) {
                $slug .= '-' . $count ;
            }
            $model->slug = $slug;
             if(!$model->user_id) {
                 $model->user_id = Auth::user()->id;
            } 
        });
        static::updating(function($model)
        {   
            if($model->isDirty('cover')) {
                $oldCoverExists = Storage::disk('public')->exists($model->getOriginal('cover'));
                if($model->cover != $model->getOriginal('cover') && $oldCoverExists) {
                    Storage::disk('public')->delete($model->getOriginal('cover'));
                }
            }
            if($model->isDirty('file')) {
                $oldFile = json_decode( $model->getOriginal('file') );
                $oldFileExists = Storage::disk('public')->exists($oldFile[0]->download_link);
                if(($model->file != $model->getOriginal('file')) && $oldFileExists) {
                    Storage::disk('public')->delete($oldFile[0]->download_link);
                }
            }
            
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeOwner($query)
    {
        return Auth::user()->hasRole(['admin' , 'super']) ? $query : $query->where('user_id' , Auth::id()) ;
    }
}
