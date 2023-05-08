<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public function scopeFilter($query, $filter) {
        if($filter['city'] ?? false) {
            $query->where('city', '=', $filter['city']);
        }
    }
}
