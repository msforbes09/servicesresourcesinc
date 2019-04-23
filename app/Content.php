<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use Uuids;

    public $incrementing = false;

    protected $fillable = [
    	'hero_header',
    	'hero_lead',
    	'hero_btn',
    	'hero_link',
    	'about_title',
        'about_text',
        'feature_title',
        'feature_text',
    	'job_header',
    	'job_image',
    	'job_btn',
    	'job_link', 
    ];
}
