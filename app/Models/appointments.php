<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\services;

class appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_date',
    ];


    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function service()
    {
        return $this->hasOne(services::class);
    }
}
