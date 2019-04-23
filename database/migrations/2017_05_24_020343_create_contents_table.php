<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('hero_header');
            $table->text('hero_lead');
            $table->string('hero_btn');
            $table->text('hero_link');
            $table->string('about_title');
            $table->text('about_text');
            $table->string('feature_title');
            $table->text('feature_text');
            $table->string('job_header');
            $table->string('job_image');
            $table->string('job_btn');
            $table->text('job_link');
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
        Schema::dropIfExists('contents');
    }
}
