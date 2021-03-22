<?php

namespace App\Models\Admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['name', 'description'];
    protected $guarded = [];

    protected $appends = [
        'image_path',
    ];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    } // end of get name attribute

    public function getImagePathAttribute()
    {
        return asset('uploads/agencies/' . $this->image);
    } // end of image path

}
