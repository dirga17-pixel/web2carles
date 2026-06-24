<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'title',
        'author',
        'writer',
        'relase_date',
    ];
    protected $casts = [
        'relase_date' => 'date',
    ];
    public function borrows()
    {
        return $this->hasMany(borrows::class);
    }
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
