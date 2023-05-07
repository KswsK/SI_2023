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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('facility_id');
            $table->string('facility_dir_name');
            $table->id()->unique();
            $table->string('name');
            $table->integer('qty');
            //facility_id, int
            //facility_director_name, string
            //(product) id, int
            //(product) name, string
            //(product) qty, int

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
