<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class Player extends Model
{
    use HasFactory;

    protected $fillable = ['position', 'name', 'description', 'email', 'phone_number'  ];


}

