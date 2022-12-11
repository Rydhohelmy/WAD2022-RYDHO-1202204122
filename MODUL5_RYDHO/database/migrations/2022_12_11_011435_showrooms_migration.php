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
        Schema::create(table: 'showrooms', callback: function(Blueprint $table) 
        {
            $table->bigIncrements(column: 'id')->unsigned();
            $table->bigInteger(column: 'user_id')->unsigned();
            $table->string('name', 255);
            $table->string('owner', 255);
            $table->string('barnd', 255);
            $table->timestamp(column: 'purchase_date');
            $table->text(column: 'Description');
            $table->string('image', 255);
            $table->enum(column: 'status', allowed: ['Lunas', 'Belum Lunas']);
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
        Schema::dropIfExists(table: 'showrooms');
    }
};
