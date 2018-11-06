<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

    protected $fillable = [
        'name',
    ];

    public function getPhoto(){
        
            return asset('storage/app/images/items_photos'.$this->photo_url);
        
    }

   /* public function users()
    {
        return $this->hasMany(User::class);
    }*/
}

