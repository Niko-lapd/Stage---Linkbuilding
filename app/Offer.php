<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{

	use SoftDeletes; 

    protected $fillable = [
        'partner_id', 'site', 'page', 'PA', 'DA', 'spam', 'visitors', 'price', 'blog', 'link', 'description', 'title', 'online',
    ];
}
