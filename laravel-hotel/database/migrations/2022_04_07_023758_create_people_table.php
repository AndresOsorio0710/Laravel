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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('type_id', 30)->default('NOT SUPPLIED');
            $table->string('identification', 20)->default('NOT SUPPLIED');
            $table->string('first_name', 50)->default('NOT SUPPLIED');
            $table->string('last_name', 50)->default('NOT SUPPLIED');
            $table->string('email', 100)->unique()->default('NOT SUPPLIED');
            $table->string('phone_number', 33)->default('NOT SUPPLIED');
            $table->string('address', 200)->default('NOT SUPPLIED');
            $table->string('gender', 15)->default('NOT SUPPLIED');
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
        Schema::dropIfExists('people');
    }
};
