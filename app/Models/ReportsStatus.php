<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsStatus extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'status_name'
    ];
}
