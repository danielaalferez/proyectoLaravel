<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;

    protected $table = "pays";

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