<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;

class AboutUsDetails extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];
}
