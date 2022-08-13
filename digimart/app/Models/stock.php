<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
    protected $table='stocks';
    protected $fillable=['product_name','speed','processor','price','description','brand','image1'
    ,'image2','image3','image4','category'];
}
