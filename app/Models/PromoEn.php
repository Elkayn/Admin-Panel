<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\FileHelpers;

class PromoEn extends Model
{
    use HasFactory;
    use FileHelpers;
    use SoftDeletes ;

    protected $fillable = ['title', 'subtitle', 'text', 'subtext', 'image', 'link', 'sublink'];

    protected $guarded = false;

}
