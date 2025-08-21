<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->decimal('price', 10, 2);
            $table->string('engine_type');
            $table->integer('engine_cc');
            $table->integer('horsepower');
            $table->string('transmission');
            $table->string('type'); // sport, cruiser, touring, etc.
            $table->integer('mileage');
            $table->string('color');
            $table->text('description')->nullable();
            $table->json('images')->nullable();
            $table->boolean('in_stock')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('motorcycles');
    }
};