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
        Schema::table('banners_marketing', function (Blueprint $table) {
            $table->text('href')->after('banner_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('banners_marketing', function (Blueprint $table) {

            $table->dropColumn('href');
        });
    }
};
