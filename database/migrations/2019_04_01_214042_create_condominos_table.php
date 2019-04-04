<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apto', 10);
            $table->string('nome', 140);
            $table->string('email', 140);
            $table->string('cpf');
            $table->string('rg');
            $table->date('data_nascimento');
            $table->enum('sexo', ['Feminino', 'Masculino', 'Outro']);
            $table->string('telefone_fixo');
            $table->string('celular');
            $table->string('vaga_apto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condominos');
    }
}
