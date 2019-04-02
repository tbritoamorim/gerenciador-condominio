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
            $table->bigInteger('cpf');
            $table->bigInteger('rg');
            $table->date('data_nascimento');
            $table->enum('sexo', ['Feminino', 'Masculino', 'Outro']);
            $table->bigInteger('telefone_fixo');
            $table->bigInteger('celular');
            $table->integer('vaga_apto');
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
