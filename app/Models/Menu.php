<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    use HasFormatRupiah;

    protected $table = "menus";
    protected $primarykey = "id";
    protected $fillable = [
        'name', 'price', 'image'
    ];
}
