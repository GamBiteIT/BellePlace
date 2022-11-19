<?php

namespace App\Models;

use App\Models\User;
use App\Models\Offer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','email','placeName','location','category','phone'];
  


    public function offers()
    {
        return $this->hasMany(Offer::class);


    }

    public function user(){
        $user = $this->belongsTo(User::class);
        return $user;

    }
}
