<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Countrie extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'countries';
    protected $fillable = ['name_ar','name_en','name_fr','code','phone_code','status'];


    public function scopeSearch($query,$term)
    {
        $term = "%$term%";
        $query->where(function($query) use ($term)
        {
            $query->where('name_ar', 'like', $term)
            ->orWhere('name_en', 'like', $term)
            ->orWhere('status', 'like', $term)
            ->orWhere('code', 'like', $term)
            ->orWhere('phone_code', 'like', $term);

        });
    }

}



