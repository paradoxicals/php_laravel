<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoModel extends Model
{
    use HasFactory;
    protected $table = "demo_table";
    protected $fillable = ["explanation","created_at","update_at"]; //Dont need to define id field
}
