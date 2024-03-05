<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'localisation',
        'price',
        'capacity',
        'is_automatic',
        'is_accept',
        'status',
        'user_id',
        'category_id',

    ];
    public const STATUS_RADIO = [
        '1' => 'just added',
        '2' => 'most full',
        '3' => 'full',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
{
    return $this->belongsTo(Category::class);
}
}
