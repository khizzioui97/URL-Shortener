<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class links extends Model
{
    protected $fillable = ['long_url', 'short_url', 'click_count'];

    public $timestamps = true;

}
