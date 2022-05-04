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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('nomber', 6)->default('00-000'); 
            $table->string('room_type', 30)->default('NOT SUPPLIED');
            $table->string('bed__type', 30)->default('NOT SUPPLIED');
            $table->string('description')->default('');
            $table->decimal('price', 11, 2)->default(0);
            $table->string('short_name', 40)->default('NOT SUPPLIED');
            $table->softDeletes();
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
        Schema::dropIfExists('rooms');
    }
};
