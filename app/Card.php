<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use Uuids;

    public $incrementing = false;

    protected $fillable = ['icon', 'title', 'text'];
}
