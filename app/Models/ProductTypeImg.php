<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypeImg extends Model
{
    use HasFactory;

    protected $table = 'product_type_imgs';

    protected $fillable = ['img_path', 'product_type_id'];
}
