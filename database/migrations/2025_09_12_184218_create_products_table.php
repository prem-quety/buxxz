<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('sku')->unique()->index();
            $table->string('name');
            $table->string('slug')->unique()->nullable();

            // Foreign keys
            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories', 'id')
                ->nullOnDelete()
                ->index('idx_products_category');

            $table->foreignId('brand_id')
                ->nullable()
                ->constrained('brands', 'id')
                ->nullOnDelete()
                ->index('idx_products_brand');


            $table->text('description')->nullable();

            $table->string('currency', 3)->default('USD');
            $table->decimal('price', 10, 2);
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->decimal('cost_price', 10, 2)->nullable();

            $table->integer('stock')->default(0);
            $table->boolean('in_stock')->default(true);
            $table->boolean('is_active')->default(true);

            $table->string('barcode')->nullable()->index();

            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('length', 8, 2)->nullable();
            $table->decimal('width', 8, 2)->nullable();
            $table->decimal('height', 8, 2)->nullable();

            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('reviews')->default(0);

            $table->string('image')->nullable();
            $table->json('gallery')->nullable();

            // Track who created/updated
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
