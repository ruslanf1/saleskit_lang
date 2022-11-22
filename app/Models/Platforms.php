<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platforms extends Model {
    protected $table = 'platforms';

    protected int $id;
    protected string $name;

    public function items() {
        return $this->belongsToMany(Items::class, 'items_platforms', 'platform_id', 'items_id');
    }
}
