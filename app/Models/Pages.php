<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'author'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
