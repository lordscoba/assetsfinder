<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $table = 'agencies';

    protected $primaryKey = 'id';

    protected $fillable = [
                         'name',
                         'email',      
                         'phone_number',      
                         'fax_number',      
                         'address',      
                         'website',      
                         'facebook_link',      
                         'twitter_link',      
                         'image_path',      
                         'about',      
                        ];
}
