<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleKeluar extends Model
{
    use HasFactory;
    //Auto konek ke nama table sample_keluar's
    protected $table = 'sample_keluar';
}
