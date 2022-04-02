<?php

namespace App\Models\ManagementAcces;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    use SoftDeletes;

    public $table = 'permission_role';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'permission_role',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
