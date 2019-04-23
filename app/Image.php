<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use Uuids;

    public $incrementing = false;

    protected $fillable = ['section', 'file'];
}
