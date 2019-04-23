<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use Uuids;

    public $incrementing = false;

    protected $fillable = ['name', 'tag', 'phones', 'emails', 'address', 'src_map'];
}
