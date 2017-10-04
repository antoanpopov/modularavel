<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core__settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('setting_name');
            $table->longText('setting_value')->nullable();
            $table->boolean('is_translatable');
            $table->timestamps();

            $table->unique('name', 'core__settings_name_unique');
            $table->index('name', 'core__settings_name_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('core__settings');
    }
}
