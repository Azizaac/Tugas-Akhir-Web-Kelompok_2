<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxCharacters implements Rule
{
    protected $max;

    public function __construct($max)
    {
        $this->max = $max;
    }

    public function passes($attribute, $value)
    {
        return strlen($value) <= $this->max;
    }

    public function message()
    {
        return 'Deskripsi maksimal ' . $this->max . ' karakter.';
    }
}
