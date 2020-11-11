<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Date;

/**
 * Class Car
 * @package App\Models
 * @mixin Builder
 */

class Car extends Model

{
    protected $fillable = [
        'name',
        'make',
        'model_name',
        'license_number',
        'weight',
        'registration_year'
    ];

    public function getCarAge()
    {
        $now = Carbon::now()->toDateString();
        $register_year = Carbon::parse($this->registration_year.'-01-01');
        return $register_year->diffInYears($now);
    }
}
