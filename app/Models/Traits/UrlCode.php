<?php

namespace App\Models\Traits;


use Illuminate\Support\Str;

trait UrlCode
{

    public function scopeUrlCode($query, $url_code)
    {
        return $query->where($this->getUrlCode(), $url_code);
    }

    public function getUrlCode()
    {
        return property_exists($this, 'url_code') ? $this->url_code : 'url_code';
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getUrlCode()} = Str::random(5);
        });
    }
}
