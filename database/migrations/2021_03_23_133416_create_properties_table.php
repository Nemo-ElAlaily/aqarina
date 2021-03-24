<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            // boolean values
            $table->tinyInteger('active')->default(1)->comment('0 => inactive , 1 => active'); // edit in mysql to be 1 and enum
            $table->tinyInteger('rent_sale')->default(1)->comment('0 => sale , 1 => rent'); // edit in mysql to be 1 and enum
            $table->tinyInteger('featured')->default(1)->comment('0 => inactive , 1 => active'); // edit in mysql to be 1 and enum
            $table->tinyInteger('add_to_home')->default(1)->comment('0 => inactive , 1 => active'); // edit in mysql to be 1 and enum
            // address
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->integer('city_id')->unsigned();
            // features
            $table->integer('rooms');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('garages')->default(0);
            $table->integer('plot_area');
            $table->integer('construction_area');
            $table->integer('price');
            // foreign keys
            $table->integer('currency_id')->unsigned();
            $table->integer('property_type_id')->unsigned();
            $table->integer('property_status_id')->unsigned();
            $table->integer('agency_id')->unsigned();
            //file
            $table->string('image')->default('default.png');
            $table->string('floor_plan')->default('default.png');
            $table->string('video')->default('default.png');
            //timestamps
            $table->softDeletes();
            $table->timestamps();
            // foreign keys relation
            $table->foreign('city_id')
                    ->references('id')
                    ->on('cities')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('property_type_id')
                    ->references('id')
                    ->on('property_types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('property_status_id')
                    ->references('id')
                    ->on('property_statuses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('agency_id')
                    ->references('id')
                    ->on('agencies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('currency_id')
                    ->references('id')
                    ->on('currencies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
