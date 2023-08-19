<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingNote extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(ATC::class, 'atc_id');
    }
}