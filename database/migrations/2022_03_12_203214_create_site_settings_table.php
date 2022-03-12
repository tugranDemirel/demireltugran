<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->string('profileImage');
            $table->string('backgroundImage');
            $table->string('aboutImage');
            $table->string('logo')->nullable();
            $table->string('svg')->nullable();
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('contactTitle');
            $table->string('contactText');
            $table->string('contactImage')->nullable();
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
        Schema::dropIfExists('site_settings');
    }
}
