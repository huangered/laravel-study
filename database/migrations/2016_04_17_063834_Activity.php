<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Activity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->string('description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
/
     * @return void
     */
    public function down()
    {
        //
    }
}
