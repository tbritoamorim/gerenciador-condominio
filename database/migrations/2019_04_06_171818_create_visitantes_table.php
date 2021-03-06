<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('condomino_id')->unsigned();
            $table->foreign('condomino_id')->references('id')->on('condominos')->onDelete('cascade');
            $table->string('nome', 140);
            $table->string('cpf');
            $table->string('rg');
            $table->date('data_nascimento');
            $table->enum('sexo', ['Feminino', 'Masculino', 'Outro']);
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
        Schema::dropIfExists('visitantes');
    }
}
