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
        Schema::create(table: 'users_rydho', callback: function(Blueprint $table) 
        {
            $table->bigIncrements(column: 'id')->unsigned();
            $table->string('name', 255);
            $table->string('no_hp', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->timestamp(column: 'created_at')->nullable();
            $table->timestamp(column: 'updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(table: 'users');
    }
};
