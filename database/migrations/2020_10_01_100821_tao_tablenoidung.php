<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoTablenoidung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_note', function (Blueprint $table) {
            $table->id('content_id');
            $table->string('content_name',100);
            $table->string('content');
            $table->string('content_image',100);
            $table->string('content_pass');
            $table->integer('ThuTu');
            $table->boolean('AnHien');
            $table->boolean('HienMenu');
            $table->string('lang',2);
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
        Schema::dropIfExists('noidung');
    }
}
