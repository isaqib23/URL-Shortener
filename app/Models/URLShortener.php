<?php

namespace App\Models;

use App\Models\Traits\UrlCode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class URLShortener extends Model
{
    use HasFactory, UrlCode;

    /**
     * @var string[]
     */
    protected $fillable = [
        'url', 'url_code'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
