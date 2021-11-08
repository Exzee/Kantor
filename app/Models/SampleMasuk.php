<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleMasuk extends Model
{
    use HasFactory;
    //Auto konek ke nama table sample_masuk's
    protected $table = 'sample_masuk';
}
