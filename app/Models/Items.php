<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model {
    protected $table = 'items';

    protected int $id;
    protected string $key;

    public function platforms() {
        return $this->belongsToMany(Platforms::class, 'items_platforms', 'item_id', 'platform_id');
    }

    public function itemsLang() {
        return $this->hasMany(ItemsLang::class, 'item_id', 'id');
    }
}
