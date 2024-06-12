<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('interessi', function (Blueprint $table) {
            $table->id();
            $table->string('interessi');
            $table->timestamps();
        });
        // Insert data into the 'interessi' table
        DB::table('interessi')->insert([
            ['id' => 1, 'interessi' => 'Construzioni', 'created_at' => now(), 'updated_at' => null],
            ['id' => 2, 'interessi' => 'Giochi in scatola', 'created_at' => now(), 'updated_at' => null],
            ['id' => 3, 'interessi' => 'Puzzle', 'created_at' => now(), 'updated_at' => null],
            ['id' => 4, 'interessi' => 'Collezionabili', 'created_at' => now(), 'updated_at' => null],
            ['id' => 5, 'interessi' => 'Action figures', 'created_at' => now(), 'updated_at' => null],
            ['id' => 6, 'interessi' => 'Gadget e idee regalo', 'created_at' => now(), 'updated_at' => null],
            ['id' => 7, 'interessi' => 'Giochi in scatola', 'created_at' => now(), 'updated_at' => null],
            ['id' => 8, 'interessi' => 'Bambole da collezione', 'created_at' => now(), 'updated_at' => null],
        ]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interessi');
    }
};