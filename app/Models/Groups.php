<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model {
    protected $table = 'groups';

    protected int $id;
    protected string $name;

    public function users() {
        return $this->belongsToMany(Users::class, 'groups_users', 'group_id', 'user_id');
    }

    public function permissions() {
        return $this->belongsToMany(Permissions::class, 'groups_permissions', 'group_id', 'permission_id');
    }
}
