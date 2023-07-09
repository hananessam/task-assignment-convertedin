<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function assigned_by () {
        return $this->belongsTo(Admin::class);
    }

    public function assigned_to () {
        return $this->belongsTo(User::class);
    }
}
