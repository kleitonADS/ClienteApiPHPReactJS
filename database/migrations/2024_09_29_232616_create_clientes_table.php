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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cpf')->unique();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->enum('sexo', ['Masculino', 'Feminino']);
            $table->string('endereco');
            $table->foreignId('estado_id')->constrained('estados')->onDelete('cascade');
            $table->foreignId('cidade_id')->constrained('cidades')->onDelete('cascade');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
