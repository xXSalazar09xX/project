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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->date("fechadevencimiento");
            $table->float("precio_venta", 8, 2);
            $table->integer("stock");
            $table->boolean("estado")->default(true);
            //Llaves foráneas
            $table->foreignId("id_categoria")->constrained("categorias");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
