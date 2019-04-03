<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('condomino_id')->unsigned();
            $table->foreign('condomino_id')->references('id')->on('condominos')->onDelete('cascade');
            $table->string('apto', 140);
            $table->string('nome', 140);
            $table->bigInteger('cpf');
            $table->bigInteger('rg');
            $table->date('data_nascimento');
            $table->enum('sexo', ['Feminino', 'Masculino', 'Outro']);
            $table->string('parentesco', 30);
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
        Schema::dropIfExists('dependentes');
    }
}
