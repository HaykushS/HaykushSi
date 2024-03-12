<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

// use Illuminate\Database\Eloquent\Relations\HasMany;

// use Illuminate\Database\Eloquent\Relations\BelongsTo; 

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'category_id',
    ] ;

    public function post():HasMany{
        return $this->hasMany(post::class);
        
    }


    // public function author(): BelongsTo{
    //     return $this->belongsTo(Categories::class,'category_id','id');
    // }
    // public function category():HasMany{
    //     return $this->hasMany(categories::class);
    // }
}
