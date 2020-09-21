<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Briefing extends Model
{
	use SoftDeletes; 

    protected $fillable = [
        'customer_id', 'PA', 'DA', 'spam', 'visitors', 'price', 'blog', 'link',
    ];
}
