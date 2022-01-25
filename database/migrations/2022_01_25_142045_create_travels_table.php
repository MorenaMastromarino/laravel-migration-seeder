<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();

            $table->date('departure_date');
            $table->string('departure_city', 50);
            $table->string('destination_country', 50);
            $table->string('destination_city', 50);
            $table->string('accomodation', 50);
            $table->string('accomodation_address', 50);
            $table->string('room_type', 50);
            $table->tinyInteger('duration')->unsigned();
            $table->date('return_data');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->boolean('is_available')->default(1);

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
        Schema::dropIfExists('travels');
    }
}
