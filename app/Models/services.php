<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\appointments;

class services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function appointments()
    {
        return $this->hasMany(appointments::class, 'service_id', 'id');
    }
}
