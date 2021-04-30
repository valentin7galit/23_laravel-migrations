<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
 
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'message',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }
}
