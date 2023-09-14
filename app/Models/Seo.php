<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Seo extends Model
{
    use HasFactory, HasTranslations;
    protected $table='seos';
    protected $guarded = [];

    public $translatable = ['title', 'description'];
}