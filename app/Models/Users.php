<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {
    protected $table = 'users';

    protected int $id;
    protected string $email;
    protected string $password;
    protected string $token;

    public function groups() {
        return $this->belongsToMany(Groups::class, 'groups_users', 'user_id', 'group_id');
    }
}
