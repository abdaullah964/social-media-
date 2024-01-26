<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'uuid',
        'friends',
        'profile_image',
        'profile_cover',

    ];
    public function posts(){
        return $this->hasMany(Post::class , 'userid','id');
    }
    public function comments(){
        return $this->hasMany(Comment::class , 'userid','id');
    }
    public function friends()
    {
        return $this->HasMany(Friend::class);
    }

    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'friends'=>'json'
    ];
}
