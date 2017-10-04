<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core__settings_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('setting_id')->unsigned();
            $table->string('locale')->index();
            $table->string('value');
            $table->text('description')->nullable();
            $table->unique(['setting_id', 'locale']);
            $table->foreign('setting_id')->references('id')->on('core__settings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('core__settings_translations');
    }
}
