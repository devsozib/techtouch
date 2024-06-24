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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('title');
            $table->date('activity_date');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('thumbnail_image')->nullable(); 
            $table->enum('status',[0,1])->default(0);    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
