<?php

use App\Models\Orders;
use App\Models\ProductCategories;
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
        Schema::create('products', function (Blueprint $table) {

            $table->id();
            $table->foreignIdFor(Orders::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(ProductCategories::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('description');
            $table->decimal('price');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
