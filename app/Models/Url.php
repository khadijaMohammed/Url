<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;
    protected $fillable = [ 'id','url','code','user_id'];
    public function url(){
        return $this->belongsTo(user::class,'user_id','id');
        
    }
    
}
