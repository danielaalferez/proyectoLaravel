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
        "code",
        "phone",
        "description"
    ];

    public function Pay() {
        return $this->hasMany(Pay::class,'project_id');
    }
}