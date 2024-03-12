<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class UsersL extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone',
        'age',
        'role',
    ];
   
    public function posts()
    {
        return $this->hasMany('');
    }
    
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    
    public  function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
    

}
