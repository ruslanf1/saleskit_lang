<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_lang', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('description');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('lang_id');

            $table->index('item_id', 'items_lang_item_idx');
            $table->index('lang_id', 'items_lang_lang_idx');

            $table->foreign('item_id', 'items_lang_item_fk')->on('items')->references('id');
            $table->foreign('lang_id', 'items_lang_lang_fk')->on('languages')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_lang');
    }
};
