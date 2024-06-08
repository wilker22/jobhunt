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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name',255);
            $table->double('package_price');
            $table->integer('package_days');
            $table->string('package_display_time',100);
            $table->integer('total_allowed_jobs');
            $table->integer('total_allowed_feature_jobs');
            $table->integer('total_allowed_photos');
            $table->integer('total_allowed_videos');
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
        Schema::dropIfExists('packages');
    }
};
