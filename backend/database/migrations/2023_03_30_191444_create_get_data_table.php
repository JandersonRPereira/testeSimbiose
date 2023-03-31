<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_projeto_rouanet_teste', function (Blueprint $table) {
            $table->increments('id_projeto');
            $table->string('pronac');
            $table->string('ano_projeto'); 
            $table->string('nome'); 
            $table->string('segmento'); 
            $table->string('area');
            $table->string('uf'); 
            $table->string('municipio'); 
            $table->string('data_inicio'); 
            $table->string('data_termino'); 
            $table->string('situacao'); 
            $table->string('mecanismo'); 
            $table->string('enquadramento'); 
            $table->string('valor_captado'); 
            $table->string('valor_aprovado'); 
            $table->string('acessibilidade'); 
            $table->string('objetivos'); 
            $table->string('justificativa'); 
            $table->string('etapa'); 
            $table->string('ficha_tecnica'); 
            $table->string('impacto_ambiental'); 
            $table->string('especificacao_tecnica'); 
            $table->string('providencia'); 
            $table->string('democratizacao'); 
            $table->string('sinopse'); 
            $table->string('resumo'); 
            $table->timestamp('created_at'); 
            $table->timestamp('updated_at'); 
            $table->string('valor_projeto'); 
            $table->string('outras_fontes'); 
            $table->string('valor_proposta'); 
            $table->string('valor_solicitado'); 
            $table->string('objetivo');
            $table->string('estrategia_execucao');
            $table->string('link_incentivadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_data');
    }
}
