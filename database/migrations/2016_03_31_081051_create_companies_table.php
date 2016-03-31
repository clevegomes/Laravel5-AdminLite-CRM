<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('country');
            $table->string('city');
            $table->string('sector');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('profile_url');
            $table->string('contact_person');
            $table->string('contact_phone');
            $table->string('contact_mobile');
            $table->string('contact_email');
            $table->text('comments');
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
        Schema::drop('companies');
    }
}
