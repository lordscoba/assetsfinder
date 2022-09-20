<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = [
                         'user_id',
                         'property_type',
                         'property_status',  
                         'property_price', 
                         'rooms', 
                         'beds', 
                         'halls', 
                         'bathrooms',
                         'garage', 
                         'area', 
                         'balcony', 
                         'emergency_exit',      
                         'cctv',      
                         'free_wi_fi',      
                         'free_parking_in_the_area',      
                         'air_conditioning', 
                         'price', 
                         'agency', 
                         'email', 
                         'description', 
                         'address', 
                         'zip_code', 
                         'country', 
                         'city', 
                         'landmark', 
                         'video_link', 
                         'status',
                         'year_built',
                         'contact_email',
                         'contact_name',
                         'contact_address',
                         'contact_phone_number',
                         'contact_telegram_link',
                         'contact_whatsapp_link',
                        ];
        

}
