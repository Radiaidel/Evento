<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'date',
        'location',
        'nb_available_places',
        'reservation_mode',
        'status',
    ];
    public function organizer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
