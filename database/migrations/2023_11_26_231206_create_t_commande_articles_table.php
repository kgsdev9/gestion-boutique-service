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
        Schema::create('t_commande_articles', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->integer('prix');
            $table->string('total');
            $table->string('designation');
            $table->unsignedBigInteger('bon_de_commande_id')->nullable();
            $table->foreign('bon_de_commande_id')->references('id')->on('bon_de_commandes')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_commande_articles');
    }
};
