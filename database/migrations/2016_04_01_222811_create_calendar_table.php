<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('country');
            $table->string('city');
            $table->string('meeting_with');
            $table->string('type');
            $table->date('meeting_date');
            $table->string('meeting_from_time');
            $table->string('meeting_to_time');
            $table->string('remind_minutes');
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
        Schema::drop('calendars');
    }
}
