<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicaoCreateTable extends Migration{

    public function up()
    {
        Schema::create('medicoes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('medicao');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
