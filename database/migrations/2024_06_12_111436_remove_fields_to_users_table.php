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
            $table->dropColumn('cellulare');
            $table->dropColumn('gender');
            $table->dropColumn('indirizzo');
            $table->dropColumn('nr_civico');
            $table->dropColumn('cap');
            $table->dropColumn('provinca');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cellulare');
            $table->string('gender');
            $table->string('indirizzo');
            $table->string('nr_civico');
            $table->string('cap');
            $table->string('provinca');
        });
    }
};












