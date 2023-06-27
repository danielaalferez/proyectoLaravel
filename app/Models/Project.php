<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";

    protected $fillable = [
        "id",
        "name",
        "date",
        "documento",
        "phone"
    ];

    public function pays() {
        return $this->hasMany(Pay::class,'project_id');
    }
}