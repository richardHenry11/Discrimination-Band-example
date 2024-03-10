<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function scopeFilter($query, array $filters)
    {
        //              cara 1:

        // if(isset($filters['keyword']) ? $filters['keyword'] : false)
        // {
        //     return $query->where('song', 'like', '%'. $filters['keyword']. '%')
        //         ->orWhere('year', 'like', '%'. $filters['keyword'])
        //         ->orWhere('durasi', 'like', '%'. $filters['keyword']. '%');
        // }

        //              cara 2:

        $query->when($filters['keyword'] ?? false, function($query, $keyword) {
            return $query->where('song', 'like', '%'. $keyword. '%')
                        ->orWhere('year', 'like', '%'. $keyword)
                        ->orWhere('durasi', 'like', '%'. $keyword. '%');  
        });
    }
}
