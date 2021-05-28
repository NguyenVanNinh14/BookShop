<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoContact extends Model
{
    use HasFactory;

    protected $table = 'info_contact';

    protected $fillable = [
        'email',
        'phone',
        'address',
    ];
}
