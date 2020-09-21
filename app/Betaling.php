<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Betaling extends Model
{
	protected $fillable = [
        'user_id', 'staat', 'huisnummer', 'postcode', 'stad', 'land', 'bedrijfsnaam', 'KVK', 'BTW', 'firstname', 'lastname', 'email',
    ];
}
