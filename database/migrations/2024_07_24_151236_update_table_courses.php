<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('discount')->after('price');
            $table->string('image_public_id')->after('image');
            $table->string('background_public_id')->after('background');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('discount');
            $table->dropColumn('image_public_id');
            $table->dropColumn('background_public_id');

        });
    }
};
