<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('shop_lists', function(Blueprint $table) {
            $table->id();
            $table->text('product');
            $table->integer('quantity');
            $table->timestamps();
        }); 
    }

    public function down(): void
    {
        Schema::dropIfExists('shop_list');
    }
};
