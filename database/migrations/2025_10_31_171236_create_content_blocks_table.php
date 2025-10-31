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
    Schema::create('content_blocks', function (Blueprint $table) {
        $table->id();
        $table->string('group_name')->index(); // Cth: 'akses_cepat', 'misi_kami', 'team_member', 'timeline'
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('icon_class')->nullable(); // Cth: 'fas fa-book-open'
        $table->string('image_url')->nullable(); // Foto anggota tim, dll.
        $table->string('extra_info')->nullable(); // Cth: Posisi (CEO), Tahun (2019)
        $table->integer('sort_order')->default(0); // Untuk pengurutan
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_blocks');
    }
};
