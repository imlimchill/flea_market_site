<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'story', 'id'];

    public function user() {
        return $this->belongsTo(User::class);  // one to many
    }
}
