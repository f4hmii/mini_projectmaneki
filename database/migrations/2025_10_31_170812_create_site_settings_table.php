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
    Schema::create('site_settings', function (Blueprint $table) {
        $table->id();
        
        // --- Landing Page Content ---
        $table->string('hero_title')->default('Bangun Masa Depanmu Dengan Melek Finansial');
        $table->text('hero_subtitle')->nullable();
        $table->string('hero_image_url')->nullable(); 

        // --- About Us Content ---
        $table->text('about_us_intro')->nullable();
        $table->text('visi_text')->nullable();
        $table->text('misi_text')->nullable();
        
        // --- Contact Info ---
        $table->string('contact_email')->default('halo@maneki.com');
        $table->string('contact_phone')->default('+62 812-3456-7890');
        $table->string('contact_address')->nullable();
        $table->string('map_image_url')->nullable();
        
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
