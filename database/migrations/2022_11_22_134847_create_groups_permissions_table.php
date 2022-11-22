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
        Schema::create('groups_permissions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('permission_id');

            $table->index('group_id', 'groups_permissions_group_idx');
            $table->index('permission_id', 'groups_permissions_permission_idx');

            $table->foreign('group_id', 'groups_permissions_group_fk')->on('groups')->references('id');
            $table->foreign('permission_id', 'groups_permissions_permission_fk')->on('permissions')->references('id');

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
        Schema::dropIfExists('groups_permissions');
    }
};
