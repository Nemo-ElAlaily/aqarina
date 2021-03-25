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

    protected $appends = [
        'image_path', 'floor_plan_path'
    ];

    public function getImagePathAttribute()
    {
        return asset('public/uploads/properties/' . $this -> image);
    } // end of image path

    public function getFloorPlanPathAttribute()
    {
        return asset('public/uploads/properties/' . $this -> floor_plan);
    } // end of image path

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    } // end of get name attribute

    public function scopeActive($query)
    {
        return $query -> where('active' , 1);
    } // end of active

    public function getActive()
    {
        return $this -> active == 1 ? 'Active' : 'Not Active';
    } // end fo get Active

    public function getFeatured()
    {
        return $this -> is_featured == 0 ? 'Featured' : 'Not Featured';
    } // end fo get Featured


    public function getAddToHome()
    {
        return $this -> add_to_home == 1 ? 'Added to Homepage' : '';
    } // end fo get Add to home

    public function getRentSale()
    {
        return $this -> rent_sale == 0 ? 'For Sale' : 'For Rent';
    } // end fo get Rent Sale

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
