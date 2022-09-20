<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    use HasFactory;

    protected $table = 'pictures';

    protected $primaryKey = 'id';

    protected $fillable = [
        'properties_id',
        'picture_name',      
        'image_path',      
       ];

    
}
