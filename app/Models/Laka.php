<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laka extends Model
{
    use HasFactory;

    protected $table = 'laka';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
