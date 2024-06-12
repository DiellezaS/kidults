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
        Schema::table('users', function (Blueprint $table) {
            $table->string('cellulare')->nullable();
            $table->string('gender')->nullable();
            $table->string('indirizzo')->nullable();
            $table->string('nr_civico')->nullable();
            $table->string('cap')->nullable();
            $table->string('provinca')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['cellulare', 'gender', 'indirizzo','nr_civico', 'cap', 'provinca']);
        });
    }
};