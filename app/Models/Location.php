<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable =['name','descriptions'];
    protected $hidden =['id','deleted_at','created_at','updated_at'];

    public function banks()
    {
        return $this->hasMany(Bank::class);

    }
}
