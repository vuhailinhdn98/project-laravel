<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedbacksModel extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    public $timestamps = false;
}
