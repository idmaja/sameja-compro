<?php

namespace App\Traits;

trait HasFormatRupiah
{
    function FormatRupiah($field, $prefix = null)
    {
        $prefix = $prefix ? $prefix : 'Rp. ';
        $nominal = $this->attributes[$field];
        return $prefix . number_format($nominal, 0, ',', '.');
    }
}
