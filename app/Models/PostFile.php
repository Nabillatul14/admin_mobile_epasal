<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostFile extends Model
{
    use HasFactory;
    protected $table = 'postfile';
    protected $fillable = [
        'title', 'data_file'
    ];

    public function author()
    {
     return $this->belongsTo(User::class, 'user_id');
    }
    
}
