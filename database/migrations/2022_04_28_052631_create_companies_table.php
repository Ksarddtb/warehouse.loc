<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('phone',13)->nullable();
            $table->string('fax',13)->nullable();
            $table->string('exat')->nullable();
            $table->string('inn');
            $table->string('url')->nullable();
            $table->string('head_nm')->nullable();
            $table->unsignedInteger('head_tin');
            $table->unsignedTinyInteger('province_id');
            $table->unsignedSmallInteger('region_id');
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
        Schema::dropIfExists('companies');
    }
};
