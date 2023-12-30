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
        Schema::create('page_home_items', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('text')->nullable();
            $table->string('job_title');
            $table->string('job_category');
            $table->string('job_location');
            $table->string('search');
            $table->string('background');
            $table->string('job_category_heading');
            $table->string('job_category_subheading')->nullable();
            $table->string('job_category_status');
            $table->string('why_choose_heading');
            $table->string('why_choose_subheading')->nullable();
            $table->string('why_choose_background');
            $table->string('why_choose_status');
            $table->string('featured_jobs_heading');
            $table->string('featured_jobs_subheading')->nullable();
            $table->string('featured_jobs_status');
            $table->string('testimonial_heading');
            $table->string('testimonial_background');
            $table->string('testimonial_status');
            $table->string('blog_heading');
            $table->string('blog_subheading')->nullable();
            $table->string('blog_status');
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
        Schema::dropIfExists('page_home_items');
    }
};
