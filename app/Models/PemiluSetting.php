<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemiluSetting extends Model
{
    protected $fillable = [
    	'pemilu_name',
    	'type_candidates_id',
    	'province_id',
    	'kokab_id'
    ];
}
