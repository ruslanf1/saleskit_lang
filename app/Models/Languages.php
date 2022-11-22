<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model {
    protected $table = 'languages';

    protected int $id;
    protected string $name;
    protected string $code;

    public function itemsLang() {
        return $this->hasMany(ItemsLang::class, 'lang_id', 'id');
    }
}
