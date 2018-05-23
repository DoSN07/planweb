<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{
    //
        protected $fillable = [
       'companyId','name','category', 'description', 'price','pricePer','address','legalNumber','contactNumber','contactEmail',
    ];
}
