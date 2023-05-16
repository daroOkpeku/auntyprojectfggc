<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    use HasFactory;

    protected $fillable = [
        "date_arrival",
        "pickup",
        "port_part",
        "time_arrival",
        "user_id"

    ];
}
