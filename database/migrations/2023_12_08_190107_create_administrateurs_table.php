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
        Schema::create('administrateur', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('password_admin');
            $table->unsignedBigInteger('Id_plat')->nullable();
            $table->foreign('Id_plat')->references('Id_plat')->on('plats');
            $table->unsignedBigInteger('Id_table')->nullable();
            $table->foreign('Id_table')->references('Id_table')->on('tables');
            $table->unsignedBigInteger('Id_boisson')->nullable();
            $table->foreign('Id_boisson')->references('Id_boisson')->on('boissons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrateur');
    }
};
