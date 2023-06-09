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
        Schema::create('purchase_request_items', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_request_id');
            $table->integer('material_id');
            $table->integer('price');
            $table->text('description');
            $table->integer('quantity');
            $table->integer('total');
            $table->integer('vendor_id');
            $table->integer('branch_id');
            $table->date('expected_at');
            $table->string('file', 100);
            $table->boolean('is_approve')->nullable();
            $table->string('remarks', 200)->nullable();
            $table->string('incoterms', 100)->nullable();
            $table->integer('winning_vendor_id')->nullable();
            $table->integer('winning_vendor_price')->nullable();
            $table->integer('winning_vendor_stock')->nullable();
            $table->string('winning_vendor_incoterms', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_request_items');
    }
};
