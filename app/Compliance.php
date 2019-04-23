<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Compliance extends Model
{
    use Uuids;

    public $incrementing = false;

    protected $fillable = ['title', 'image_sm', 'image_lg'];
}
