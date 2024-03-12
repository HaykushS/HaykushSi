<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 


class Car extends Model
{
    
    use HasFactory;
    protected $fillable = [
        "model",
        "license_plate",
        "color",
        "user_id",
    ] ;

    public function cars(): HasMany
    {
        return $this->hasMany(car::class);
    }
     
    public function author(): BelongsTo
  {
    return $this->belongsTo(UsersL::class, 'userId');
  }
  
  
} 

  
