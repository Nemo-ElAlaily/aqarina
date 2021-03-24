<?php

namespace App\Models\Admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['name', 'description', 'address'];
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query -> where('active' , 1);
    } // end of active

    public function getActive()
    {
        return $this -> active == 1 ? 'Active' : 'Not Active';
    } // end fo get Active

    public function agency()
    {
        return $this -> belongsTo(Agency::class);

    } // end of agency

    public function propertyType()
    {
        return $this -> belongsTo(PropertyType::class);

    } // end of propertyType

    public function propertyStatus()
    {
        return $this -> belongsTo(PropertyStatus::class);

    } // end of propertyType

    public function currency()
    {
        return $this -> belongsTo(Currency::class);

    } // end of propertyType

} // end of model
