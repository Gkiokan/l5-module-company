<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();

            $table->string('name')->nullable()->default('');
            $table->string('hr')->nullable()->default('');
            $table->string('owner')->nullable()->default('');

            $table->string('street')->nullable()->default('');
            $table->string('plz')->nullable()->default('');
            $table->string('city')->nullable()->default('');
            $table->string('state')->nullable()->default('');
            $table->string('country')->nullable()->default('');

            $table->string('tel')->nullable()->default('');
            $table->string('fax')->nullable()->default('');
            $table->string('email_info')->nullable()->default('');
            $table->string('email_support')->nullable()->default('');

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
        Schema::dropIfExists('company');
    }
}
