<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name');
            $table->integer('price');
            $table->integer('category_id')->unsigned();
            $table->text('description');
            $table->text('overview');
            $table->string('slug');
            $table->text('image');
            $table->text('background');
            $table->string('number_of_sessions');
            $table->json('lessons')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
