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
        Schema::create('article_facture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id')->nullable();
            $table->unsignedBigInteger('facture_id')->nullable();
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('facture_id')->references('id')->on('factures')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedBigInteger('quantity')->nullable();
            $table->unsignedBigInteger('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_facture');
    }
};
