<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Interessi extends Model
{
    use HasFactory;
    protected $table = 'interessi';
    // public function users()
    // {
    //     return $this->belongsToMany(User::class,'user_interessi');
    // }
    
    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_interessi');
    }
}
