<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonebookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactLaravel', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('contact_id');
            $table->string('contact_name')->unique();
            $table->string('contact_number');
            $table->string('contact_email');
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
        Schema::drop('contactLaravel');
    }
}
