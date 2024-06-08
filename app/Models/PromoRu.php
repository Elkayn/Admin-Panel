<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\FileHelpers;

class PromoRu extends Model
{
    use HasFactory;
    use FileHelpers;
    use SoftDeletes ;

    protected $fillable = ['titler', 'subtitler', 'textr', 'subtextr', 'imager', 'linkr', 'sublinkr'];

    protected $guarded = false;
}
