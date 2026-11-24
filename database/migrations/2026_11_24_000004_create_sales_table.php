<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up():void{Schema::create('sales',function(Blueprint $table):void{$table->id();$table->foreignId('product_id')->constrained()->cascadeOnDelete();$table->unsignedInteger('quantity');$table->decimal('unit_price',10,2);$table->timestamp('sold_at');$table->timestamps();});}public function down():void{Schema::dropIfExists('sales');}};
