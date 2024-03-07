<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'categorie_id',
        'image_path',
        'title',
        'description',
        'date',
        'location',
        'nb_available_places',
        'reservation_mode',
        'price',
        'status',
    ];
    public function organizer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
