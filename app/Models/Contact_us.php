<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    use HasFactory;
    protected $table = 'contact_us';

    protected $primaryKey = 'id';

    protected $fillable = [
        'contact_name',
        'phone_number',      
        'email',      
        'body',      
       ];
}
