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
        Schema::create('movie_technology', function (Blueprint $table) {
            $table->unsignedBigInteger("movie_id");
            $table->foreign("movie_id")->references("id")->on("movies");
            $table->unsignedBigInteger("technology-id");
            $table->foreign("technology_id")->references("id")->on("technologies");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
