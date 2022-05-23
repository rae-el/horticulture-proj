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
        Schema::create('mothers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->smallInteger('plant_id');
            //name comes from plants table link by id
            $table->tinyInteger('location_id');
            //link to location table by id
            //in the location table put the name, site supervisor and if advance stock
            $table->smallInteger('block_number')->nullable();
            $table->smallInteger('row_number')->nullable();
            $table->mediumInteger('quantity')->nullable();
            $table->date('date_of_stock')->nullable();
            //should have pruning as a separate table?
            //should have fertilization as a separate table?
            //should have pest/disease treatment as a separate table?

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mothers');
    }
};
