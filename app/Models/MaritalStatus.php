<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    use HasFactory;

    protected $fillable = ['status','descriptions'];
    protected $hidden =['id','deleted_at','created_at','updated_at'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
