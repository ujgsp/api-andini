<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $table = 'armada';

    protected $primaryKey = 'id';

    protected $fillable = [
        'unit',
        'no_hp',
        'status'
    ];
}
