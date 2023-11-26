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
        Schema::table('t_commande_articles', function (Blueprint $table) {
            $table->unsignedBigInteger('bon_de_commande_id')->nullable();
            $table->foreign('bon_de_commande_id')->references('id')->on('t_commande_articles')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_commande_articles', function (Blueprint $table) {
            //
        });
    }
};
