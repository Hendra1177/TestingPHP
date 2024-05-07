<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable=[
        'idpost',
        'title',
        'content',
        'date',
        'username',
    ];
    public function username()
    {
        return $this->belongsTo(account::class, 'username', 'username');
    }
}
