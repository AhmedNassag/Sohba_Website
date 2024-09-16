<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'address' => 'array',
        'address.hotline' => 'array',
        'social_midea' => 'array',
        'phone' => 'array',
    ];

    public function getHotlineImgAttribute($value)
    {
        return strpos($value, 'assets') === 0
            ? asset($value)
            : ($value ? asset('storage/' . $value) : null);
    }
    public function getFaviconAttribute($value)
    {
        return strpos($value, 'assets') === 0
            ? asset($value)
            : ($value ? asset('storage/' . $value) : null);
    }
    public function getLogoAttribute($value)
    {
        return strpos($value, 'assets') === 0
            ? asset($value)
            : ($value ? asset('storage/' . $value) : null);
    }


    // getters
    public function getEmailLinkAttribute()
    {
        // return collect($this->social_midea);
        return collect($this->social_midea)->firstWhere('platform', 'البريد الإلكتروني')['url'] ?? '#';
    }

    public function getFacebookLinkAttribute()
    {
        // return collect($this->social_midea);
        return collect($this->social_midea)->firstWhere('platform', 'فيس بوك')['url'] ?? '#';
    }

    /**
     * Get the Instagram link.
     *
     * @return string
     */
    public function getInstagramLinkAttribute()
    {
        return collect($this->social_midea)->firstWhere('platform', 'انستجرام')['url'] ?? '#';
    }

    /**
     * Get the TikTok link.
     *
     * @return string
     */
    public function getTikTokLinkAttribute()
    {
        return collect($this->social_midea)->firstWhere('platform', 'تيك توك')['url'] ?? '#';
    }

    /**
     * Get the YouTube link.
     *
     * @return string
     */
    public function getYouTubeLinkAttribute()
    {
        return collect($this->social_midea)->firstWhere('platform', 'يوتيوب')['url'] ?? '#';
    }

    /**
     * Get the Facebook icon.
     *
     * @return string
     */
    public function getFacebookIconAttribute()
    {
        return collect($this->social_midea)->firstWhere('platform', 'فيس بوك')['icon'] ?? 'default-facebook-icon.png';
    }

    /**
     * Get the Instagram icon.
     *
     * @return string
     */
    public function getInstagramIconAttribute()
    {
        return collect($this->social_midea)->firstWhere('platform', 'انستجرام')['icon'] ?? 'default-instagram-icon.png';
    }

    /**
     * Get the TikTok icon.
     *
     * @return string
     */
    public function getTikTokIconAttribute()
    {
        return collect($this->social_midea)->firstWhere('platform', 'تيك توك')['icon'] ?? 'default-tiktok-icon.png';
    }

    /**
     * Get the YouTube icon.
     *
     * @return string
     */
    public function getYouTubeIconAttribute()
    {
        return collect($this->social_midea)->firstWhere('platform', 'يوتيوب')['icon'] ?? 'default-youtube-icon.png';
    }
}
