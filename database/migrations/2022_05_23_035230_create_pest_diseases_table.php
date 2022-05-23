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
            $table->integer('image_id');
            $table->string('type',20);
            $table->string('name',128);
            $table->text('description')->nullable();
            $table->string('treatment_type',128);
            $table->string('treatment_name',128)->nullable();
            $table->string('treatment_dosage',128)->nullable();
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
        Schema::dropIfExists('pest_diseases');
    }
};
