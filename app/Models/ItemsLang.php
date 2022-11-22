<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsLang extends Model {
    protected $table = 'items_lang';

    protected int $id;
    protected string $value;

    public function items() {
        return $this->belongsTo(Items::class, 'items_id', 'id');
    }

    public function languages() {
        return $this->belongsTo(Languages::class, 'lang_id', 'id');
    }
}
