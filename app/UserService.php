<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    //
        protected $fillable = [
       'userId','name','category', 'description', 'price','pricePer','address','contactNumber','contactEmail',
    ];
}
