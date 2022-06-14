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
        Schema::create('pest_diseases', function (Blueprint $table) {
            $table->id();
            //not sure about this array method
            $table->foreignId('image_id');
            $table->set('type',['pest','disease']);
            $table->string('name',128);
            $table->text('description')->nullable();
            $table->string('treatment_type',128);
            $table->string('treatment_name',128)->nullable();
            $table->string('treatment_dosage',128)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pest_diseases');
    }
};
