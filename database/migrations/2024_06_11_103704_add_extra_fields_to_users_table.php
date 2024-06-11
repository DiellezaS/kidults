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
            $table->string('negozio')->after('email'); // Add 'negozio' field
            $table->string('lastname')->after('negozio'); // Add 'lastname' field
            $table->date('date')->after('lastname'); // Add 'date' field
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['negozio', 'lastname', 'date']);
        });
    }
};












