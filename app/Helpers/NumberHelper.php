<?php

namespace App\Helpers;

class NumberHelper
{
    public static function formatNumber($num)
    {
        return number_format($num);
    }
}
