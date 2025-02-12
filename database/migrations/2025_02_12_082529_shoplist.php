<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('shoplist', function(Blueprint $table) {
            $table->id();
            $table->text('product');
            $table->integer('quantity');
        }); 
    }

    public function down(): void
    {
        Schema::dropIfExists('shoplist');
    }
};
