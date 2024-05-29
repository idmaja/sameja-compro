<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPayment extends Model
{
    use HasFactory;
    use HasFormatRupiah;

    protected $table = "historypayments";
    protected $primarykey = "id";
    protected $date = 'created_at';
    protected $fillable = [
        'name', 'note', 'price', 'check'
    ];
}
