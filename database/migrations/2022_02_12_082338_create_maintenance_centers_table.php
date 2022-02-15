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
        Schema::create('maintenance_centers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $tabel->text('address');
            $table->string('phone');
            $tabel->string('email');
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('agent_id');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('agent_id')->references('id')->on('agents');
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
        Schema::dropIfExists('maintenance_centers');
    }
};
