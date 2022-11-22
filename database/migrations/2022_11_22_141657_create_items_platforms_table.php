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
        Schema::create('items_platforms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('platform_id');

            $table->index('item_id', 'items_platforms_item_idx');
            $table->index('platform_id', 'items_platforms_platform_idx');

            $table->foreign('item_id', 'items_platforms_item_fk')->on('items')->references('id');
            $table->foreign('platform_id', 'items_platforms_platform_fk')->on('platforms')->references('id');

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
        Schema::dropIfExists('items_platforms');
    }
};
