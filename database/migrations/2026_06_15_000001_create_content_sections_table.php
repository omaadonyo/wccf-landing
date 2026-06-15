<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content_sections', function (Blueprint $table) {
            $table->id();
            $table->string('page');        // e.g. 'home', 'about', 'donate'
            $table->string('section_key'); // e.g. 'hero_title', 'about_text'
            $table->string('type')->default('text'); // text, textarea, image, icon
            $table->text('value')->nullable();
            $table->timestamps();

            $table->unique(['page', 'section_key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content_sections');
    }
};
