<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
	use Uuids;

    public $incrementing = false;

    protected $fillable = ['header', 'lead', 'button', 'btn_link'];

}
