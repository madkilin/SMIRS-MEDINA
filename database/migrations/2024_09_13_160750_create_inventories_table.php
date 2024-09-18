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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('catregory_id')->constrained('categories')->onDelete('cascade'); // Foreign key constraint
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade'); // Foreign key constraint
            $table->string('quantity');
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade'); // Foreign key constraint
            $table->foreignId('condition_id')->constrained('conditions')->onDelete('cascade'); // Foreign key constraint
            $table->string('added_date');
            $table->string('price');
            $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade'); // Foreign key constraint
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
