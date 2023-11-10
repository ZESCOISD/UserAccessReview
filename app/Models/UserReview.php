<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    protected $table = 'user_access_reviews';
    protected $fillable = [
        'staff_no',
        'username',
        'full_name',
        'employee_designation',
        'area',
        'review_access',
        'review_action',
        'comments',
        'system_id',
        'role_id',
    ];
}
