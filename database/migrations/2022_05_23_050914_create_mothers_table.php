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
            $table->foreignUuid('plant_id');
            //name & picture comes from plants table link by id
            //location id cannot go ahead until table is created
            //$table->foreignUuid('location_id');
            $table->set('location_id',[1,2]);
            //link to location table by id
            $table->smallInteger('block_number')->nullable();
            $table->smallInteger('row_number')->nullable();
            $table->mediumInteger('quantity')->nullable();
            $table->date('date_of_stock')->nullable();

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
