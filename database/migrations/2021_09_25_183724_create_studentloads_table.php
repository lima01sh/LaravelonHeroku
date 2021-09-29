<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentloads', function (Blueprint $table) {
            $table->increments('no');
            $table->string('stdid');
            $table->string('stdname');
            $table->string('faculty');
            $table->string('type');
            $table->string('year');
            $table->string('term');
            $table->integer('termfees');
            $table->integer('livecost');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentloads');
    }
}
