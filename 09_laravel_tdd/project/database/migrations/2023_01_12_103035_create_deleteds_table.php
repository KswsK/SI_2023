<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deleteds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_announcement');
            $table->string('seller_login');
            $table->string('category');
            $table->string('title');
            $table->string('image')->nullable();
            $table->double('price');
            $table->longText('description');
            //(new App\Helpers\MigrateHelper())->migration($table);
            $table->longText('reason');
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
        Schema::dropIfExists('deleteds');
    }
};
