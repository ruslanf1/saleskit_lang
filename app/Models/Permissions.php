<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model {
    protected $table = 'permissions';

    protected int $id;
    protected string $type;

    public function groups() {
        return $this->belongsToMany(Groups::class, 'groups_permissions', 'permission_id', 'group_id');
    }
}
