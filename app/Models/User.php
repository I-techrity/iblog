<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Role;

class User extends \TCG\Voyager\Models\User /*  implements MustVerifyEmail */
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fb_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function audios()
    {
        return $this->hasMany(Audio::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // public function posts()
    // {
        
    //     return $this->videos()
    //                 ->union($this->articles())
    //                 ->union($this->audios());
                    
    // }

    public function scopeSuper($query)
    {
        return Auth::user()->hasRole('super') ? $query : $query->where('role_id' , '<>' , Role::where('name' , 'super')->first()->id)->Where('role_id' , '<>' , Role::where('name' , 'admin')->first()->id);
    }
}
