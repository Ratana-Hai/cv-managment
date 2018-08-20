<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoldiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('khFname');
            $table->string('khLname');
            $table->string('engFname');
            $table->string('engLname');
            $table->string('birthName')->nullable();
            $table->string('otherName')->nullable();
            $table->date('DOB')->nullable();
            $table->integer('sex')->nullable();
            $table->string('bVillage')->nullable();
            $table->string('bCommune')->nullable();
            $table->string('bDistricts')->nullable();
            $table->string('bProvinces')->nullable();
            $table->string('cVillage')->nullable();
            $table->string('cCommune')->nullable();
            $table->string('cDistricts')->nullable();
            $table->string('cProvinces')->nullable();
            $table->integer('is_delete')->default(0);
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
        Schema::dropIfExists('soldiers');
    }
}
