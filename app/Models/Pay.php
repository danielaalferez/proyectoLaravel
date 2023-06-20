<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "pay";

    protected $fillable = [
        "credit_num",
        "due_date",
        "segurity_code",
        "amount_paid",
        "description",
        "project_id"
    ];

    public function Project() {
        return $this->hasMany(Project::class,'pay_id');
    }
}