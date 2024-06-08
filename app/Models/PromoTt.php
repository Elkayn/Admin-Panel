<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\FileHelpers;

class PromoTt extends Model
{
    use HasFactory;
    use FileHelpers;
    use SoftDeletes ;

    protected $fillable = ['titlet', 'subtitlet', 'textt', 'subtextt', 'imaget', 'linkt', 'sublinkt'];

    protected $guarded = false;
}
