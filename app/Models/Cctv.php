<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cctv extends Model
{
    use HasFactory;

    protected $table = 'cctv';

    protected $primaryKey = 'id_cctv';

    protected $guarded = ['id_cctv'];
}
