<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolydaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holydays', function (Blueprint $table) {
            $table->id();
            $table->string('package_name', 50);
            $table->string('destination_country', 50);
            $table->string('region', 50);
            $table->string('city', 50);
            $table->string('hotel/resort', 50);
            $table->string('hotel/resort_address', 50);
            $table->string('airport_department', 50);
            $table->string('airtport_arrival', 50);
            $table->boolean('airport_shuttle');
            $table->boolean('all_inclusive');
            $table->string('reccomended_for', 20);
            $table->text('description');
            $table->float('price', 8, 2);
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
        Schema::dropIfExists('holydays');
    }
}
