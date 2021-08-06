<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacebookSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('facebook_settings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('domain_verification')->boolean();
            $table->string('verification_code')->nullable();
            $table->string('page_id')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('facebook_settings');
    }
}
