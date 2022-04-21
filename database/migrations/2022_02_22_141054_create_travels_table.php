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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('departure', 50);
            $table->string('destination', 50);
            $table->dateTime('dateOfDeparture');
            $table->integer('numberOfPassengers');
            $table->decimal('price');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id') ->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('travel');
    }
};
