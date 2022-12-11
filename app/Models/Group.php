<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        // 保存時user_idをログインユーザーに設定
        self::saving(function ($group) {
            $group->user_id = \Auth::id();
        });
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'belonging');
    }
}
