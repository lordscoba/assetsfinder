<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscribers extends Model
{
    use HasFactory;
    protected $table = 'suscribers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'email',      
       ];
}
