<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'name', 'branch_id', 'occasion_id', 'image', 'price'];

    public $timestamps = false;

    public function occasion()
    {
        return $this->belongsTo('App\Models\Occasion');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }
}
