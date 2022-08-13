<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class background extends Model
{
    use HasFactory;
    protected $table='backgrounds';
    protected $fillable=['carousel_number','one','two','three','four','five'];
}
