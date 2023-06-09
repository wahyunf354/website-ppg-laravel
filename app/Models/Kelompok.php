<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelompok extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $fillable = ['name', 'desa_id'];


    public function desa()
    {
        return $this->belongsTo(Desa::class, 'desa_id', 'id');
    }
}
