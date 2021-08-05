<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentItemsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('equipment_items', function (Blueprint $table) {
            $table->id();
            $table->char("code", 8)->default('');

            $table->string("title");
            $table->string("brand")->nullable();
            $table->string("productCode")->nullable();

            $table->text("specifications")->nullable();
            $table->text("description")->nullable();
            $table->text("instructions")->nullable();

            $table->boolean("isElectrical")->default(false);
            $table->float("powerRating")->nullable(); // in Watts
            $table->float("price")->nullable(); // in LKR

            // Dimensions and Physical Properties
            $table->float("width")->nullable()->default(0);
            $table->float("length")->nullable()->default(0);
            $table->float("height")->nullable()->default(0);
            $table->float("weight")->nullable()->default(0);

            $table->string('thumb')->nullable();
            $table->timestamps();

            $table->bigInteger('equipment_type_id');
            $table->foreign('equipment_items')
                ->references('id')
                ->on('equipment_types')
                ->onDelete('cascade');
        });

    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('equipment_items');
    }
}
