<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_infos', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_no')->nullable();
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('completion_date')->nullable();
            $table->string('performance')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('certificate_infos');
    }
}
