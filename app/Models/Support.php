<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    //afirma quais propriedades podem ser preenchidas e enviadas ao banco;
    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
}
